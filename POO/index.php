<?php

	require "devuelve_productos.php";
	
	$pais=$_POST["pais"];
	
	$productos=new DevuelveProductos();
	
	$arrayProductos=$productos->get_productos($pais);
	
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<?php
    
		foreach($arrayProductos as $elemento){
		
			echo "<table>";
			echo "<tr><td>" . $elemento['CÓDIGOARTÍCULO'] . "</tr></td>";
			echo "<tr><td>" . $elemento['NOMBREARTÍCULO'] . "</tr></td>";
			echo "<tr><td>" . $elemento['SECCIÓN'] . "</tr></td>";
			echo "<tr><td>" . $elemento['PRECIO'] . "</tr></td>";
			echo "<tr><td>" . $elemento['FECHA'] . "</tr></td>";
			echo "<tr><td>" . $elemento['IMPORTADO'] . "</tr></td>";
			echo "<tr><td>" . $elemento['PAÍSDEORIGEN'] . "</tr></td>";
			echo "</table>";
			
			echo "<br><br>";
			
		}
	
	?>
</body>
</html>