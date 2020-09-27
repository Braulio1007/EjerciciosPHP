<?php
	class Conectar{
	
	public static function conexion(){
		try{
			
			$conexion = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
			$conexion->setAttribute(PDO:: ATTR_ERRMODE, ERRMODE_EXCEPTION);
			$conexion->exec("SET CHARACTER SET utf8");
			
			
			
		}catch(Exception $e){
			die ("Error: " . $e->getMessage());
			echo "Error en linea:" . $e->getLine();
		}
		return $conexion;
	}

	}
?>