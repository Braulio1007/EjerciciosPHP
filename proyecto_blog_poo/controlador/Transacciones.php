<?php
	include_once("../modelo/manejo_objetos.php");
	include_once("../modelo/objeto_blog.php");
	
	try{
	
	$miconexion=new PDO("mysql: host=localhost; dbname=bbddblog", "root","");
	$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	
	if($_FILES["imagen"]["error"]){
		
		switch($_FILES["imagen"]["error"]){
			case 1: //Error exceso de tamaño de archivos php.ini
				echo "El tamaño del archivo excede lo permitido";
				break;
			case 2: //Error en el tamaño ed archivo desde formulario
				echo "El tamaño del archivo excede 2MB";
				break;
			case 3: //Corrupcion de archivo
				echo "El envio de archivos se interrumpio";
				break;
			case 4: //No se elijio archivo
				echo "No se ha enviado ningun archivo";
				break; 	
		}
		
	}else{
		echo "Entrada subida correctamente <br>";
		
		if((isset($_FILES["imagen"]["name"]) && ($_FILES["imagen"]["error"]==UPLOAD_ERR_OK))){
			$destino_ruta="../imagenes/";
			
			move_uploaded_file($_FILES["imagen"]["tmp_name"],$destino_ruta.$_FILES["imagen"]["name"]);
			
			echo "El archivo " .$_FILES["imagen"]["name"]." se ha copiado en el directorio de imagenes <br>";
		}else{
			echo"El archivo no se ha podido copiar";	
		}
	}
	
	
	$manejo_objetos=new manejo_Objetos($miconexion);
	$blog=new objeto_blog();
	
	
	$blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]), ENT_QUOTES));
	$blog->setFecha(date("y-m-d H:i:s"));
	$blog->setComentarios(htmlentities(addslashes($_POST["area_comentarios"]),ENT_QUOTES));
	$blog->setImagen($_FILES["imagen"]["name"]);
	
	$manejo_objetos->insertaContenido($blog);
	
	echo "Entrada de blog agregada correctamente!<br>";
	
	}catch(Exception $e){
		die ("Error: " . $e->getMessage());	
	}

?>