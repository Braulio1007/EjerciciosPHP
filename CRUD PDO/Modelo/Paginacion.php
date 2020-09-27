<?php
	require_once("Conectar.php");
	$liga=Conectar::conexion();
///////////////////////////////////////////////PÁGINACION///////////////////////////////////
	$tamaño_paginas=3;
	
	if(isset($_GET["pagina"])){
		
		if($_GET["pagina"]==1){
			header("Location:index.php");	
		}else{
			$pagina=$_GET["pagina"];	
		}
	
	}else{
		$pagina=1;
	}
	
	
	$empezar_desde=($pagina-1)*$tamaño_paginas;
	
	$sql_todos="SELECT * FROM DATOS_USUARIOS";
	
	$resultado=$liga->prepare($sql_todos);
	$resultado->execute(array());
	
	$num_filas=$resultado->rowCount();
	$total_paginas=ceil($num_filas/$tamaño_paginas);
	///////////////////////////////////////////////////////////////////////////////////////////////////////



?>