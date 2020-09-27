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
	
	echo "Bienvenido: " . $_SESSION["usuario"];
?>  
    <p>Esto es información secreta</p>
<table width="443" height="185" border="1">
      <tr>
        <td colspan="3" align="center">Zona usuarios Registrados</td>
      </tr>
      <tr>
        <td><a href="Usuarios_Registrados2.php">Página 1 </a></td>
        <td><a href="Usuarios_Registrados3.php">Página 2 </a></td>
        <td><a href="Usuarios_Registrados4.php">Página 3</a></td>
      </tr>
</table> 
<p>&nbsp;</p>

<p><a href="Cierre.php">Cierra Sesión</a></p>

</body>
</html>