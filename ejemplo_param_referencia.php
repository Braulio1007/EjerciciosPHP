<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<?php
    
		/*function incremento(&$valor1){
			$valor1++;
			return $valor1;
		}
		$numero=5;
		echo(incremento($numero) . "<br>");
		echo $numero . "<br>";*/
		
		function cambia_mayus(&$param){
		
			$param=strtolower($param);
			$param=ucwords($param);
			return $param;
		}
		
		$cadena="hOlA mUndO";
		echo(cambia_mayus($cadena) . "<br>");
		echo $cadena;
	?>
</body>
</html>