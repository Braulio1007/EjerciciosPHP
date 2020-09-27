<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

	try{
	
	$liga=new PDO("mysql: host=localhost; dbname=pruebas", "root", "");
	$liga->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$liga->exec("SET CHARACTER SET utf8");
	
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
	
	$sql="SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN='DEPORTES'";
	
	$resultado=$liga->prepare($sql);
	$resultado->execute(array());
	
	$num_filas=$resultado->rowCount();
	$total_paginas=ceil($num_filas/$tamaño_paginas);
	
	echo "Número de registros en la consulta: " . $num_filas . "<br>";
	echo "Mostramos " . $tamaño_paginas . " registros por página<br>";
	echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<br>";
	
	/*
	*/
	$resultado->closeCursor();
	$sql_limites="SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN='DEPORTES' LIMIT $empezar_desde,$tamaño_paginas";
	$resultado=$liga->prepare($sql_limites);
	$resultado->execute(array());
	
	while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
		echo "Nombre articulo: " . $registro["NOMBREARTÍCULO"] . " Sección: " . $registro["SECCIÓN"] . " Precio: " . 			$registro["PRECIO"]  . " País: " . $registro["PAÍSDEORIGEN"] . "<br>"; 		
	}
	
	}catch (Exception $e){
		die ("Error: " . $e->getMessage());	
	}
	
	
	//////////////////////////////////////////////PÁGINACION/////////////////////////////////////////////////////
	
	for($i=1; $i<=$total_paginas; $i++){
		echo "<a href='?pagina=". $i . "'>" . $i . "</a>  ";	
	}
	
?>
</body>
</html>