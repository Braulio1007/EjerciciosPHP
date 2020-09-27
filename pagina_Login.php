<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	$user=$_GET["usuario"];
	$pass=$_GET["contraseña"];
	
	require("datosConexion.php");
	
	//$consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";
	$consulta="SELECT * FROM USUARIOS WHERE USUARIO = '$user' AND CONRTA='$pass'";
	
	
	$resultado=mysqli_query($conexion,$consulta);
	
	
	while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
		echo "Bienvenido $user <br> Estos son sus datos: <td>";
	echo "<table><tr><td>";
	echo $fila['USUARIO'] . " </td><td> ";
	echo $fila['CONRTA'] . " </td><td> ";
	echo $fila['TFNO'] . " </td><td> ";
	echo $fila['DIRECCION'] . " </td></tr></table> ";
	echo "<br><br>";
	
	}
	mysqli_close($conexion);
	
?>

</body>
</html>