<?php
	class Coche{
			protected $ruedas;
			var $color;
			protected $motor;
			
			function Coche(){//Método constructor
				$this -> ruedas=4;
				$this -> color="";
				$this -> motor=1600;
				
			}
			function get_motor(){
				return $this->motor; 
			}
			function get_ruedas(){
				return $this->ruedas;
			}
			
			function arrancar(){
				echo "Estoy arrancando <br>";
			}
			
			function girar(){
				echo "Estoy girando <br>";
			}
			
			function frenar(){
				echo "Estoy frenando <br>";
			}
			
			
			
			function establece_color($colorCoche, $nombreCoche){
				$this -> color=$colorCoche;
				echo "El color de " . $nombreCoche . " es: " . $this->color . "<br>"; 
			}
		}
		
		//---------------------------------------------------------------------------------
		
		
		class Camion extends Coche{
			var $ruedas;
			var $color;
			var $motor;
			
			function Camion(){//Método constructor
				$this -> ruedas=8;
				$this -> color="";
				$this -> motor=2600;
				
			}
			function establece_color($colorCamion, $nombreCamion){
				$this -> color=$colorCamion;
				echo "El color de " . $nombreCamion . " es: " . $this->color . "<br>"; 
			}
			function arrancar(){
			
				parent::arrancar();
				echo "Camion arrancado";
			
			}
		}
		
		

?>