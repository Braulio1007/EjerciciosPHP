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
	
	$consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";
	
	$resultado=mysqli_query($conexion,$consulta);
	
	
	while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
	//echo "<table><tr><td>";
	echo"<form action='Actualizar.php' method='get'>";
	echo"<input type='text' name='c_art' value='" . $fila['CÓDIGOARTÍCULO'] . "'><br>";
	echo"<input type='text' name='n_art' value='" . $fila['NOMBREARTÍCULO'] . "'><br>";
	echo"<input type='text' name='seccion' value='" . $fila['SECCIÓN'] . "'><br>";
	echo"<input type='text' name='importado' value='" . $fila['IMPORTADO'] . "'><br>";
	echo"<input type='text' name='precio' value='" . $fila['PRECIO'] . "'><br>";
	echo"<input type='text' name='fecha' value='" . $fila['FECHA'] . "'><br>";
	echo"<input type='text' name='p_orig' value='" . $fila['PAÍSDEORIGEN'] . "'><br><br>";
	
	echo"<input type='submit' name='enviando' value='Actualizar'>";
	echo"</form>";
	echo "<br><br>";
	
	}
	mysqli_close($conexion);
	
?>

</body>
</html>