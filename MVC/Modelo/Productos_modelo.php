<?php
	class Productos_modelo{
		
		private $db;
		private $productos;
		
		public function _construct(){
			require_once("Modelo/Conectar.php");
			
			$this->db=Conectar::conexion();
			$this->productos=array();		
		}
		
		public function get_productos(){
			
			$consulta=$this->db->query("SELECT * FROM PRODUCTOS");
			
			while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
				$this->productos[]=$fila;
			}
			
			return $this->productos;
			
		}
		
	}

?>