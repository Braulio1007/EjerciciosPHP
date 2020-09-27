<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	
		//$busqueda=$_GET["buscar"];

		require("datosConexion.php");
		$codigo_art=$_GET["c_art"];
		$seccion=$_GET["seccion"];
		$nom_art=$_GET["n_art"];
		$prec_art=$_GET["precio"];
		$fecha=$_GET["fecha"];
		$importado=$_GET["importado"];
		$paisOrigen=$_GET["p_orig"];
	
		$consulta="INSERT INTO PRODUCTOS(CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA,IMPORTADO,PAÍSDEORIGEN)    VALUES('$codigo_art','$seccion','$nom_art','$prec_art','$fecha','$importado','$paisOrigen')";
		
		$resultado=mysqli_query($conexion,$consulta);
		
		if($resultado){
			echo "Registro guardado<br><br>";
			echo "<table><tr><td>$codigo_art</td></tr>
						 <tr><td>$seccion</td></tr>
						 <tr><td>$nom_art</td></tr>
						 <tr><td>$prec_art</td></tr>
						 <tr><td>$fecha</td></tr>
						 <tr><td>$importado</td></tr>
						 <tr><td>$paisOrigen</td></tr>";
			
		}else{
			echo "Error en el registro";	
		}
	
		mysqli_close($conexion);
	
?>
</body>
</html>