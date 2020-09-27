<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
		
		/*$palabra="braulio";
		$palabra2="BRAULIO";
		echo (strtoupper($palabra . "<br>"));
		echo (strtolower($palabra . "<br>"));
		
		function suma($num1, $num2){
		$resultado=$num1+$num2;
		return $resultado;
		}
		
		echo (suma(5,10));*/
		
		function frase_mayuscula($frase, $conversion=true){
			$frase=strtolower($frase);
			
			if($conversion){
				$resultado=ucwords($frase);
			}else{
				$resultado=strtoupper($frase);
			}
			return $resultado;
		
		}
		echo(frase_mayuscula("Esto es una prueba"));
	
?>
</body>
</html>