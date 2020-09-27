<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
		$codigo_a=$_POST["c_Articulo"];
		$s_art=$_POST["seccion"];
		$n_art=$_POST["nombre"];
		$p_art=$_POST["precio"];
		$fecha=$_POST["fecha"];
		$importado=$_POST["importado"];
		$p_art=$_POST["pais"];

	try{
		$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root','');
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET utf8");
		
		
		
		$consulta="INSERT INTO PRODUCTOS(CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO,PAÍSDEORIGEN)VALUES(:c_art,:sec,:nom, :prec, :fecha, :import, :p_orig)";
		
		
		$resultado=$base->prepare($consulta);
		
		$resultado->execute(array("c_art"=>$codigo_a,":sec"=>$s_art,":nom"=>$n_art,":prec"=>$p_art,
		":fecha"=>$fecha,":import"=>$importado,":p_orig"=>$p_art));
		
		echo "Registro insertado!";	
		
		$resultado->closeCursor();
		
		
	}catch(Exception $e){
		die("Error: " . $e->GetMessage());
	}finally{
		$base=null;
	}

?>
</body>
</html>