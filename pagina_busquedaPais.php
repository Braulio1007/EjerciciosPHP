<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	
	require("datosConexion.php");
	
	$busqueda=$_GET["buscar"];
	
	//$consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";
	$consulta="SELECT CÓDIGOARTÍCULO,NOMBREARTÍCULO,SECCIÓN,IMPORTADO,PRECIO,PAÍSDEORIGEN FROM PRODUCTOS WHERE PAÍSDEORIGEN = ?";
	
	$resultado=mysqli_prepare($conexion,$consulta);
	
	$ok=mysqli_stmt_bind_param($resultado,"s",$busqueda);
	
	$ok=mysqli_stmt_execute($resultado);
	
	if($ok==TRUE){
		$ok=mysqli_stmt_bind_result($resultado,$c_art,$n_art,$s_art,$importado,$p_art,$p_origen);
		echo "Articulos encontrados <br><br>";
		
		while(mysqli_stmt_fetch($resultado)){
			echo "$c_art $n_art $s_art $importado $p_art $p_origen <br>";
		}
		
		mysqli_stmt_close($resultado);
			
	}else{
	 echo "Error al ejecutar consulta";
	}
	
	
	mysqli_close($conexion);
	
?>

</body>
</html>