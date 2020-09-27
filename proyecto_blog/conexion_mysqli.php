
<?php

	$host="localhost";
	$user="root";
	$contraseña="";
	$db_name="bbddblog";
	
	$conexion=mysqli_connect($host,$user,$contraseña);
	if(mysqli_connect_errno()){
		"No se pudo conectar al servidor";
		exit();	
	}
	mysqli_select_db($conexion,$db_name) or die ("No se encuentra la base de datos");
	mysqli_set_charset($conexion,"utf8");

?>