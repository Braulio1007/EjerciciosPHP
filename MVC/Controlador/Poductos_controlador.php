<?php

	require_once("Modelo/Productos_modelo.php");
	
	$producto=new Productos_modelo();
	
	$matriz_producto=$producto->get_productos();
	
	require_once("Vista/productos_view.php");

?>