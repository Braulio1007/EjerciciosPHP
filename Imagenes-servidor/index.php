<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style>
	table{
		margin:auto;
		width:450px;
		border:2px dotted #009966;
	}
</style>
</head>

<body>
<form action="datosImagen.php" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>
<label for="imagen">Imagen: </label></td>
<td><input type="file" name="imagen" size="20"></td></tr>
<tr><td colspan="2" style="text-align:center"><input type="submit" value="Enviar Imagen"></td></tr>
</table>
</form>
</body>
</html>