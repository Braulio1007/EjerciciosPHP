<?php

	require("conexion.php");
	
	class DevuelveProductos extends Conexion{
		
		public function DevuelveProductos(){
			parent::__construct();	
		}
		
		public function get_productos($dato){
			///////////////////////////////////////////POO//////////////////////////////////////////////////////
			/*$resultado=$this->conexion_db->query('SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN="' . $dato . '"');
			$productos=$resultado->fetch_all(MYSQLI_ASSOC);
			return $resultado;*/
			////////////////////////////////////////////////////////////////////////////////////////////////////
			//////////////////////////////////////////PDO///////////////////////////////////////////////////////
			$consulta="SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN = '".$dato."'";
			
			$sentencia=$this->conexion_db->prepare($consulta);
			
			$sentencia->execute(array());
			$resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
			$sentencia->closeCursor();
			
			return $resultado;
			
			$this->conexion_db=null;
		}
	}

?>