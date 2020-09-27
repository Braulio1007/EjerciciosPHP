<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

	if(isset ($_COOKIE["idioma_seleccionado"])){
	 if($_COOKIE["idioma_seleccionado"]=="es"){
		header("Location:esp.php");	
	 }else if($_COOKIE["idioma_seleccionado"]=="en"){
		header("Location:ingles.php");
	 }
	}
	
?>
	<table width="25%" border="0" align="center">
    <tr>
    	<td colspan="2" align="center"><h1>Elige Idioma</h1></td>
    </tr>
    <tr>
    	<td align="center"><a href="creaCookies.php?idioma=es"><img src="imagenes/mexico.jpg" width="130" height="80"></a></td>
    	<td align="center"><a href="creaCookies.php?idioma=en"><img src="imagenes/usa.jpg" width="130" height="88"></a></td>
    </tr>
    </table>
</body>
</html>