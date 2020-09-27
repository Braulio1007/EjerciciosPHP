<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	$busqueda=$_GET["buscar"];
	
	require("datosConexion.php");
	
	//$consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";
	$consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO = '$busqueda'";
	echo "$consulta <br><br>";
	
	$resultado=mysqli_query($conexion,$consulta);
	
	
	while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
	echo "<table><tr><td>";
	echo $fila['CÓDIGOARTÍCULO'] . " </td><td> ";
	echo $fila['NOMBREARTÍCULO'] . " </td><td> ";
	echo $fila['SECCIÓN'] . " </td><td> ";
	echo $fila['IMPORTADO'] . " </td><td> ";
	echo $fila['PRECIO'] . " </td><td> ";
	echo $fila['PAÍSDEORIGEN'] . " </td></tr></table> ";
	echo "<br><br>";
	
	}
	mysqli_close($conexion);
	
?>

</body>
</html>