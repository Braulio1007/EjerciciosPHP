<?php

	require_once("Modelo/Personas_modelo.php");
	
	$persona=new Personas_modelo();
	
	$matriz_persona=$persona->get_personas();
	
	require_once("Vista/personas_view.php");

?>