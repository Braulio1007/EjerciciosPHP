<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");
	
	Compra_vehiculo::descuento_gobierno();
	
	$compra_Braulio=new Compra_vehiculo("compacto");
	
	$compra_Braulio->climatizador();
		
	$compra_Braulio->tapiceria_cuero("blanco");
	
	echo $compra_Braulio->precio_final() . "<br>";
	
	
	$compra_Ana=new Compra_vehiculo("compacto");
	
	$compra_Ana->climatizador();
	
	$compra_Ana->tapiceria_cuero("rojo");
	
	echo $compra_Ana->precio_final();
	
	
	
	


?>
</body>
</html>