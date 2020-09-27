<?PHP

	include("conexion.php");
	
	$id=$_GET['id'];
	
	$sql->query("DELETE FROM DATOS_USUARIO WHERE ID='$id'");	
	header("Location:index.php");

?>