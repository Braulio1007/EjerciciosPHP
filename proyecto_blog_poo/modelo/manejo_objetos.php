
<?php
	include_once("objeto_blog.php");
	class manejo_Objetos{
		
		private $conexion;
		
		
		public function __construct($conexion){
			
			$this->setConexion($conexion);
			
		}
		
		
		public function setConexion(PDO $conexion){
		
			$this->conexion=$conexion;	
			
		}
		
		public function getContenidoPorFecha(){
			$matriz=array();
			$contador=0;
			
			$resultado=$this->conexion->query("SELECT * FROM CONTENIDO ORDER BY FECHA");
			
			while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
			
				$blog=new objeto_blog();
				
				$blog->setId($registro["ID"]);
				$blog->setTitulo($registro["TITULO"]);
				$blog->setFecha($registro["FECHA"]);
				$blog->setComentarios($registro["COMENTARIO"]);
				$blog->setImagen($registro["IMAGEN"]);
				
				$matriz[$contador]=$blog;
				$contador++;
			}
			
			
			return $matriz;
		}
		
		public function insertaContenido(objeto_blog $blog){
		
				$sql="INSERT INTO CONTENIDO(TITULO,FECHA,COMENTARIO,IMAGEN)VALUES('" . $blog->getTitulo() . "','". $blog->getFecha() . "','" . $blog->getComentarios() ."','". $blog->getImagen() . "')";
				
				$this->conexion->exec($sql);
			
		}
		
	}

?>