<?php
	
	try{
		$liga=new PDO("mysql: host=localhost; dbname=pruebas", "root", "");
		$liga->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$liga->exec("SET CHARACTER SET utf8");
		 	
		
	}catch (Exception $e){
		die ("Error: " . $e->getMessage());
	}


?>