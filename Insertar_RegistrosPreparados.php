<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	
	require("datosConexion.php");
	
	$idArt=$_GET["c_art"];
	$secArt=$_GET["secc"];
	$nomArt=$_GET["n_art"];
	$preArt=$_GET["pre"];
	$fecArt=$_GET["fec"];
	$impArt=$_GET["imp"];
	$origenArt=$_GET["p_ori"];
	
	//$consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";
	$consulta="INSERT INTO PRODUCTOS(CÓDIGOARTÍCULO,SECCIÓN,NOMBREARTÍCULO,PRECIO,FECHA,IMPORTADO,PAÍSDEORIGEN)VALUES(?,?,?,?,?,?,?)";
	
	$resultado=mysqli_prepare($conexion,$consulta);
	
	$ok=mysqli_stmt_bind_param($resultado,"sssssss",$idArt,$secArt,$nomArt,$preArt,$fecArt,$impArt,$origenArt);
	
	$ok=mysqli_stmt_execute($resultado);
	
	if($ok==TRUE){
		//$ok=mysqli_stmt_bind_result($resultado,$c_art,$s_art,$n_art,$p_art,$fecha,$importado,$p_origen);
		echo "Articulos ingresados correctamente <br><br>";
		
		/*while(mysqli_stmt_fetch($resultado)){
			echo "$c_art $n_art $s_art $importado $p_art $p_origen <br>";
		}*/
		
		mysqli_stmt_close($resultado);
			
	}else{
	 echo "Error al insertar";
	}
	
	
	mysqli_close($conexion);
	
?>

</body>
</html>