<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php

	include("../modelo/manejo_objetos.php");
	
	try{
		$miconexion=new PDO("mysql: host=localhost; dbname=bbddblog","root","");
		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
		
		$manejo_objetos=new manejo_Objetos($miconexion);
		
		$tabla_blog=$manejo_objetos->getContenidoPorFecha();
		if(empty($tabla_blog)){
			echo "No hay entradas aún";	
		}else{
			foreach($tabla_blog as $valor){
				
				echo "<h3>" . $valor->getTitulo() . "</h3>";
				echo "<h4>"	. $valor->getFecha() . "</h4>";
				echo "<div style='width:400px'>";
				echo $valor->getComentarios() . "</div>";
				
				if($valor->getImagen()!=""){
					echo "<img src='../imagenes/" . $valor->getImagen() . "' width='300px' heigth='200px'/>";	
				}
				
				echo "</hr>";
				
			}
		}
		
	}catch(Exception $e){
		die("Error: " . $e->getMessage());	
	}

?>
<br>

<a href="Formulario.php">Volver a la página de insercción</a>

</body>
</html>