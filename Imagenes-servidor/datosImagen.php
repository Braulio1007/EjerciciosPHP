<?php

	//Aqui se recibe los datos de la imagen
	$nombre_imagen=$_FILES["imagen"]["name"];
	
	$tipo_imagen=$_FILES["imagen"]["type"];
	
	$tamaño_imagen=$_FILES["imagen"]["size"];
	
	if($_FILES["imagen"]["size"]<1000000){
		
		if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif"        ){
		
		$carpeta_destino=$_SERVER["DOCUMENT_ROOT"]."/intranet/uploads/";
	
		//Moviendo imagen de la carpeta temporal al directorio seleccionado.
		move_uploaded_file($_FILES["imagen"]["tmp_name"],$carpeta_destino.$nombre_imagen);
		}else{
			echo "Solo se pueden subir formatos de imagenes";	
		}
		
	}else{
		echo "El tamaño es demasiado grande!";	
	}
	echo $nombre_imagen;
	
	
	require("conexion_PDO.php");
		
		$sql="UPDATE PRODUCTOS SET FOTO='$nombre_imagen' WHERE CÓDIGOARTÍCULO='AR01'";
		
		$resultado=mysqli_query($base,$sql);
?>