<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<?php
    	include("vehiculos.php");
				
		$mazda = new Coche();
		$Pegaso = new Camion();
		
		echo "El mazda tiene " . $mazda->get_ruedas() . " ruedas<br>";
		echo "El pegaso tiene " . $Pegaso->get_ruedas(). " ruedas <br>";
		echo "El Mazda tiene un motor de " . $mazda->get_motor() . " cc<br>";	
		echo "El Pegaso tiene un motor de " . $Pegaso->get_motor() . "cc<br>";
		
	?>
</body>
</html>