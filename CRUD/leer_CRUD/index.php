<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>
<?php
	include("conexion.php");
	
	//$conexion=$liga->query("SELECT * FROM DATOS_USUARIOS");
	//$registros=$conexion->fetchAll(PDO::FETCH_OBJ);
	///////////////////////////////////////////////PÁGINACION///////////////////////////////////
	$tamaño_paginas=3;
	
	if(isset($_GET["pagina"])){
		
		if($_GET["pagina"]==1){
			header("Location:index.php");	
		}else{
			$pagina=$_GET["pagina"];	
		}
	
	}else{
		$pagina=1;
	}
	
	
	$empezar_desde=($pagina-1)*$tamaño_paginas;
	
	$sql_todos="SELECT * FROM DATOS_USUARIOS";
	
	$resultado=$liga->prepare($sql_todos);
	$resultado->execute(array());
	
	$num_filas=$resultado->rowCount();
	$total_paginas=ceil($num_filas/$tamaño_paginas);
	///////////////////////////////////////////////////////////////////////////////////////////////////////
	
	$registros=$liga->query("SELECT * FROM DATOS_USUARIOS LIMIT $empezar_desde,$tamaño_paginas")->fetchAll(PDO::FETCH_OBJ);
		
	if(isset($_POST["cr"])){	
		$nombre=$_POST["Nom"];
		$apellido=$_POST["Ape"];
		$direccion=$_POST["Dir"];
		
		$sql=("INSERT INTO DATOS_USUARIOS(NOMBRE, APELLIDO, DIRECCION) VALUES(:nom,:ap,:dir)");
		$resultado=$liga->prepare($sql);
		$resultado->execute(array(":nom"=>$nombre, ":ap"=>$apellido, ":dir"=>$direccion));
		
		header("Location: index.php");
	}
?>


<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
  <table width="50%" border="0" align="center">
    <tr>
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
	<?php foreach($registros as $persona):?>	
   	  <tr>
      <td><?php echo $persona->ID;?> </td>
      <td><?php echo $persona->NOMBRE;?></td>
      <td><?php echo $persona->APELLIDO;?></td>
      <td><?php echo $persona->DIRECCION;?></td>
      <td class="bot"><a href="borrar.php?id=<?php echo $persona->ID?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><a href="editar.php?id=<?php echo $persona->ID?>& nom=<?php echo $persona->NOMBRE?>& ap=<?php echo $persona->APELLIDO?>& dir=<?php echo $persona->DIRECCION?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
      </tr>
    <?php endforeach;?>
    
           
	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
  	  <tr><td>
	  <?php
	//////////////////////////////////////////////PÁGINACION/////////////////////////////////////////////////////
	
			for($i=1; $i<=$total_paginas; $i++){
				echo "<a href='?pagina=". $i . "'>" . $i . "</a>  ";	
			}
	
	?>
	</td></tr>	
  </table>
</form>

<p>&nbsp;</p>
</body>
</html>