<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
		$s_art=$_POST["c_Articulo"];
		$s_art=$_POST["seccion"];
		$s_art=$_POST["nombre"];
		$s_art=$_POST["precio"];
		$s_art=$_POST["fecha"];
		$s_art=$_POST["importado"];
		$p_art=$_POST["pais"];

	try{
		$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root','');
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET utf8");
		
		
		
		$consulta="SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN = :sec AND PAÍSDEORIGEN = :p_orig";
		
		$resultado=$base->prepare($consulta);
		
		$resultado->execute(array(":sec"=>$s_art,":p_orig"=>$p_art));
		
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
			echo "Nomber artículo: " . $registro['NOMBREARTÍCULO'] . " Sección: " . $registro["SECCIÓN"] . "  Precio: " . 									$registro["PRECIO"] . " País de origen: " . $registro["PAÍSDEORIGEN"] . "<br>";
		}
		
		
		$resultado->closeCursor();
		
		
	}catch(Exception $e){
		die("Error: " . $e->GetMessage());
	}finally{
		$base=null;
	}

?>
</body>
</html>