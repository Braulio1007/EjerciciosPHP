<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<?php
		define("AUTOR","Braulio", true);
		
		echo "La linea de esta instruccion es: " . __LINE__ . "<BR>";
		
		echo "Estamos trabajando con estos ficheros: " . __FILE__ . "<br>";
		
		echo "El autor es: " . AUTOR;
		
    ?>
</body>
</html>