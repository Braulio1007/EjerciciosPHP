<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

	require("conexion_PDO.php");
	
	$consulta="SELECT FOTO FROM PRODUCTOS WHERE CÓDIGOARTÍCULO='AR01'";
	$resultado=mysqli_query($base,$consulta);
	
	while($fila=mysqli_fetch_array($resultado)){
		$ruta_img=$fila['FOTO'];
	}
?>

<div>
	<img src="/intranet/uploads/<?php echo $ruta_img;?>" alt="Imagen del primer articulo" width="25%">
</div>
</body>
</html>