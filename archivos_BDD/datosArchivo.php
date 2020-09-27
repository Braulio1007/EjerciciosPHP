<?php

	//Aqui se recibe los datos de la imagen
	$nombre_archivo=$_FILES["archivo"]["name"];
	
	$tipo_archivo=$_FILES["archivo"]["type"];
	
	$tamaño_archivo=$_FILES["archivo"]["size"];
	
	if($_FILES["archivo"]["size"]<10000000){
		
		
		$carpeta_destino=$_SERVER["DOCUMENT_ROOT"]."/intranet/uploads/";
	
		//Moviendo imagen de la carpeta temporal al directorio seleccionado.
		move_uploaded_file($_FILES["archivo"]["tmp_name"],$carpeta_destino.$nombre_archivo);
		
		
	}else{
		echo "El tamaño es demasiado grande!";	
	}
		
	
	require("conexion_PDO.php");
	
	$archivo_objetivo=fopen($carpeta_destino.$nombre_archivo, "r");
	$contenido=fread($archivo_objetivo,$tamaño_archivo);
	$contenido=addslashes($contenido);
	fclose($archivo_objetivo);
	
		
		$sql="INSERT INTO ARCHIVOS(id, nombre, tipo, contenido) VALUES (0,'$nombre_archivo','$tipo_archivo', '$contenido')";
		
		$resultado=mysqli_query($base,$sql);
		
		if(mysqli_affected_rows($base)>0){
			echo "Se ha insertado el registro con éxito";	
		}else{
			echo "No se ha podido insertar";	
		}
?>