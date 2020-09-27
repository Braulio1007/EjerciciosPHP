<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<?php
    	$var1=1;
		
		do{
			echo "Estamos ejecutando el codigo del bucle con valor $var1<br>";
			$var1++;
		}while($var1<6);
		
		echo "Hemos salido del blucle";
	?>
</body>
</html>