<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style>
	.resaltar{
		color:#F00;
		font-weight:bold;
	}
</style>
</head>

<body>
	<?php
		$var1="Casa";
		$var2="CASA";
		$resultado=strcmp($var1,$var2);//Devuelve 1 si son diferentes.... Devuelve 0 si son iguales.
		echo "El resultado es: $resultado <br>";
			if(!$resultado){
			echo "Coinciden <br>";
		}else{
			echo"No coinciden <br>";
		}
		
		
		$resultado=strcasecmp($var1,$var2);//Devuelve 1 si son diferentes.... Devuelve 0 si son iguales.
		echo "El resultado es: $resultado <br>";
		
		if($resultado){
			echo "No coinciden";
		}else{
			echo"Coinciden";
		}
    ?>
</body>
</html>