<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

	$conexion=new mysqli("localhost", "root", "", "pruebas");
	
	if($conexion->connect_errno){
		echo "Fallo la conexión" . $conexion->connect_errno;
		
	}
	//mysqli_set_charset($conexion,"utf8");
	$conexion->set_charset("uft8");
	
	$consulta="SELECT * FROM PRODUCTOS";
	
	//$resultado=mysqli_query($conexion,$consulta);
	$resultado=$conexion->query($consulta);
	
	if($conexion->errno){
		die($conexion->errno);
	}
	
	//$fila=mysqli_fetch_array($resultado, MYSQL_ASSOC);
	while($fila=$resultado->fetch_assoc()){
		
		echo "<table><tr><td>";
		echo $fila['CÓDIGOARTÍCULO'] . " </td><td> ";
		echo $fila['NOMBREARTÍCULO'] . " </td><td> ";
		echo $fila['SECCIÓN'] . " </td><td> ";
		echo $fila['IMPORTADO'] . " </td><td> ";
		echo $fila['PRECIO'] . " </td><td> ";
		echo $fila['PAÍSDEORIGEN'] . " </td></tr></table> ";
		echo "<br>";
	}
	
	//mysqli_close($conexion);
	$conexion->close
?>
</body>
</html>