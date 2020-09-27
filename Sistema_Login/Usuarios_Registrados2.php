<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

</head>

<body>
<?php
	
	session_start();
	if(!isset($_SESSION["usuario"])){
		header("Location:login.php");
	}

?>
	<h1>Bienvenidos Usuarios!!</h1>
 <?php
	
	echo "Usuario: " . $_SESSION["usuario"];
?>  
    <p>Esto es información secreta</p>
	<p><a href="Usuarios_Registrados1.php">Volver</a></p>
    
    <p><a href="Cierre.php">Cierra Sesión</a></p>
</body>
</html>