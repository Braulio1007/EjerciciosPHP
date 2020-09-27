<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	$nomre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$texto_mail=$_POST['comentarios'];
	$correo_destinatario=$_POST["email"];
	$telefono=$_POST["tfno"];
	$asunto=$_POST["asunto"];
	
	$header="MIME-Version: 1.0\r\n";
	$header.="Content-type: text/html; charset=iso-8859-1\r\n";
	$header.="FROM Prueba Braulio< brauliocanomorales@gmail.com>\r\n";
	$exito=mail($correo_destinatario,$asunto,$texto_mail,$header);
	
	if($exito){
		echo "Mensaje enviado!";	
	}else{
		echo "Ha ocurrido un error";	
	}

?>
</body>
</html>