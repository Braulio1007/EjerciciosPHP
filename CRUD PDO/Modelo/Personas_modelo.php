<?php
	class Personas_modelo{
		
		private $db;
		private $personas;
		
		public function _construct(){
			require_once("Modelo/Conectar.php");
			
			$this->db=Conectar::conexion();
			$this->personas=array();		
		}
		
		public function get_personas(){
			require("Paginacion.php");
			
			$consulta=$this->db->query('SELECT * FROM DATOS_USUARIOS LIMIT $empezar_desde, $tamaño_paginas');
			
			while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
				$this->personas[]=$fila;
			}
			
			return $this->personas;
		}
		
	}

?>