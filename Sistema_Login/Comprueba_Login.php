<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

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
			header("location:Usuarios_Registrados1.php");
		}else{
			header("location:Login.php");
		}
		
	}catch(Exception $e){
		die ("Error: ". $e->getMessage());
	}

?>
</body>
</html>