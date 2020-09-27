<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

	require("conexion_PDO.php");
	
	$id="";
	$contenido="";
	$tipo="";
	
	$consulta="SELECT * FROM ARCHIVOS WHERE ID=1";
	$resultado=mysqli_query($base,$consulta);
	
	while($fila=mysqli_fetch_array($resultado)){
		$id=$fila["id"];
		$contenido=$fila["contenido"];
		$tipo=$fila["tipo"];
	}
	
	echo "ID: " . $id . "<br>";
	echo "Tipo" . $tipo . "<br>";
	echo "<img src='data:image/jpeg; base64," . base64_encode($contenido)."'>" . "<br>";
	
?>

<div>


</div>
</body>
</html>