<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	require("datosConexion.php");
	
	$user=mysqli_real_escape_string($conexion,$_GET["usuario"]);
	$pass=mysqli_real_escape_string($conexion,$_GET["contraseña"]);
	
	//$consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";
	$consulta="DELETE FROM USUARIOS WHERE USUARIO = '$user' AND CONRTA='$pass'";
	echo $consulta . "<br><br>";
	
	mysqli_query($conexion,$consulta);
	
	if(mysqli_affected_rows($conexion)>0){
		echo "Baja procesada";
	}else{
		echo "No se encontro información";
	}
	
	/*if(mysqli_query($conexion,$consulta)){
		echo "Baja procesada";
	}*/
	
	
	mysqli_close($conexion);
	
?>

</body>
</html>