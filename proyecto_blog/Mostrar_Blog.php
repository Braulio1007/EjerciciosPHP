<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<h2>Blog</h2>
</br>
<?php
	include("conexion_mysqli.php");
	$consulta="SELECT * FROM CONTENIDO ORDER BY FECHA DESC";
	
	if($resultado=mysqli_query($conexion,$consulta)){
	
		while($registro=mysqli_fetch_assoc($resultado)){
			echo "<h3>" . $registro["TITULO"] . "</h3>";
			echo "<h4>" . $registro["FECHA"] . "</h4>";
			echo "<div style='width:400px'>" . $registro["COMENTARIO"] . "</div><br/><br/>";
			
			if($registro["IMAGEN"]!=""){
				echo "<img src='imagenes/". $registro["IMAGEN"] . "' width='300px'/>";	
			}
			echo "<hr/>";
		}
		
	}
?>

</body>
</html>