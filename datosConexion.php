<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?PHP
	$db_host="localhost";
	$db_usuario="root";
	$db_pass="";
	$db_nombre="pruebas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_pass);
	if(mysqli_connect_errno()){
		echo "Fallo en la conexion de BD";
		exit();
	}
	
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BD");
	
	mysqli_set_charset($conexion,"utf8");
?>

</body>
</html>