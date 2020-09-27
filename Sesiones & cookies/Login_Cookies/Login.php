<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
	h1,h2{
		text-align:center;
	}
	table{
		width:25px;
		background-color:#FFC;
		border:2px dotted #F00;
		margin:auto;
	}
	.izq{
		text-align:left;
	}
	.der{
		text-align:rigth;
	}
	td{
		text-align:center;
		padding:10px;
	}
</style>
</head>

<body>
	<?php
	$autenticado=false;
	
	if(isset($_POST["enviar"])){
	try{
		$liga=new PDO("mysql:host=localhost; dbname=pruebas","root","");
		
		$liga->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS=:login AND PASSWORD=:password";
		
		$resultado=$liga->prepare($sql);
		
		$login=htmlentities(addslashes($_POST["login"]));
		$pass=htmlentities(addslashes($_POST["password"]));
		
		$resultado->bindValue(":login",$login);
		$resultado->bindValue(":password",$pass);
		
		$resultado->execute();
		
		$numero_registro=$resultado->rowCount();
		
		if($numero_registro!=0){
			$autenticado=true;
			if (isset($_POST["recordar"])){
				setcookie("nombre_usuario", $_POST["login"], time()+86400);				
			}
		}else{
			//header("location:Login.php");
			echo "Usuario o contraseña incorrectos";
		}
		
	}catch(Exception $e){
		die ("Error: ". $e->getMessage());
	}
	}

	?>

	<?php
		if($autenticado==false){
			if(!isset($_COOKIE["nombre_usuario"])){
				include("Formulario.html");	
			}
		}
		if(isset($_COOKIE["nombre_usuario"])){
			echo "Hola " . $_COOKIE["nombre_usuario"] . "!";	
		}else if($autenticado==true){
			echo "Hola " . $_POST["login"]. "!";
		}
	?>
    
    <h2>CONTENIDO DE LA WEB</h2>
    <table width="800" border="0">
    <tr>
    	<td><img src="Imagenes/1.jpg" width="300" height="171"></td>
        <td><img src="Imagenes/2.jpg" width="300" height="171"></td>
    </tr>
    <tr>
    	<td><img src="Imagenes/3.jpg" width="300" height="171"></td>
        <td><img src="Imagenes/4.jpg" width="300" height="171"></td>
    </tr>
    </table>
    
    <?php
    
	if($autenticado==true || isset($_COOKIE["nombre_usuario"])){
		include("zona_registrados.html");	
	}
	
	?>
</body>
</html>