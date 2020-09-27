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
			session_start();
			$_SESSION["usuario"]=$_POST["login"];
			//header("location:Usuarios_Registrados1.php");
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
		if(!isset ($_SESSION['usuario'])){
    	include("Formulario.html");
		}else{
			echo "Usuario:" . $_SESSION['usuario'];
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
    
</body>
</html>