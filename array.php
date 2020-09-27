<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	$semana[]="Lunes";
	$semana[]="Martes";
	$semana[]="Miercoles";
	$semana[]="Jueves";
	
	//FOR NORMAL
	for($i=0;$i<count($semana);$i++){
		echo $semana[$i] . "<br>";
	}
	
	$semana[]="Viernes";
	
	for($i=0; $i<count($semana); $i++){
		echo $semana[$i] . "<br>";
	}
	echo "<br><br><br>";
	
	
	//ARRAY ORDENADO
	$contenido=array("Lunes","Martes","Miercoles","Jueves","Viernes");
	sort($contenido);
	for($i=0; $i<count($contenido);$i++){
		echo $contenido[$i] . "<br>";
	}
	echo "<br><br><br>";	
	
	
	
	//FOR EACH
	
	$datos=array("Nombre"=>"Juan", "Apellido"=>"Cano","Edad"=>25);
	$datos["Pais"]="México";
	foreach($datos as $recorrido=>$valor){
		echo "A $recorrido le corresponde $valor <br>";
	}
	echo "<br><br><br>";
	
	
	
?>
</body>
</html>