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
	
		$consulta="DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO='$codigo_art'";
		
		$resultado=mysqli_query($conexion,$consulta);
		
		if($resultado){
			//echo "Registro borrado<br><br>";
			//echo mysqli_affected_rows($conexion);
			if(mysqli_affected_rows($conexion)==0){
				echo "No hay registros con ese argumento";
			}else{
				echo "Se han eliminado: " . mysqli_affected_rows($conexion) . " registros";
			}
			
		}else{
			echo "Error en la operación";	
		}
	
		mysqli_close($conexion);
	
?>
</body>
</html>