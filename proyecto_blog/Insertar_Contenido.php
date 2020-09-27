<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	include("conexion_mysqli.php");
	
	if($_FILES["imagen"]["error"]){
		
		switch($_FILES["imagen"]["error"]){
			case 1: //Error exceso de tamaño de archivos php.ini
				echo "El tamaño del archivo excede lo permitido";
				break;
			case 2: //Error en el tamaño ed archivo desde formulario
				echo "El tamaño del archivo excede 2MB";
				break;
			case 3: //Corrupcion de archivo
				echo "El envio de archivos se interrumpio";
				break;
			case 4: //No se elijio archivo
				echo "No se ha enviado ningun archivo";
				break; 	
		}
		
	}else{
		echo "Entrada subida correctamente <br>";
		
		if((isset($_FILES["imagen"]["name"]) && ($_FILES["imagen"]["error"]==UPLOAD_ERR_OK))){
			$destino_ruta="imagenes/";
			
			move_uploaded_file($_FILES["imagen"]["tmp_name"],$destino_ruta.$_FILES["imagen"]["name"]);
			
			echo "El archivo " .$_FILES["imagen"]["name"]." se ha copiado en el directorio de imagenes";
		}else{
			echo"El archivo no se ha podido copiar";	
		}
	}
	
	$titulo=$_POST["campo_titulo"];
	$fecha=date("y-m-d H:i:s");
	$comentarios=$_POST["area_comentarios"];
	$imagen=$_FILES["imagen"]["name"];
	
	
	$consulta="INSERT INTO CONTENIDO(TITULO, FECHA, COMENTARIO, IMAGEN) VALUES('" .$titulo. "', '".$fecha."', '".$comentarios."','".$imagen."') ";
	
	$resultado=mysqli_query($conexion,$consulta);
	
	mysqli_close($conexion);
	
	echo "<br/>Se ha agregado el comentario con éxito<br/><br/>";
?>

	<a href="Formulario.php">Añadir nueva entrada</a>
    <br>
    <a href="Mostrar_Blog.php">Ver blog</a>
</body>
</html>