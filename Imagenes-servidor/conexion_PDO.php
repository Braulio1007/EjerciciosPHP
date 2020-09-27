<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	
	$host="localhost";
	$usuario="root";
	$pass="";
	$dbname="pruebas";
		
	$base=mysqli_connect($host,$usuario,$pass);
	
		if(mysqli_connect_errno()){
			echo"fallo en la conexion";
			exit();	
		}
		mysqli_select_db($base,$dbname) or die ("No se encuentra la BD");
		mysqli_set_charset($base,"utf8");
?>
</body>
</html>