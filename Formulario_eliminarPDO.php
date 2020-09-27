<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style>
	table{
		width:300px;
		margin:auto;
		background-color:#FFC;
		border: 2px solid #F00;
		padding:5px;
	}
	td{
		text-align:center;
	}

</style>
</head>

<body>
	<form action="páginaEliminar_PDO.php" method="POST">
    	<table>
        <tr><td>Código artículo:</td><td><input type="text" name="c_Articulo"></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enviando" value="Andando">
    	</td></tr></table>
    </form>

</body>
</html>