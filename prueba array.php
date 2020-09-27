<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	$abecedario=array("fila0"=>array("a","b","c","d","e")
					 ,"fila1"=>array("f","g","h","i","j")
					 ,"fila2"=>array("k","l","m","n","o")
					 ,"fila3"=>array("p","q","r","s","t")
					 ,"fila4"=>array("u","v","w","x","y")
					  );
		
	foreach($abecedario as $numfilas=>$letras){
		
		while(list($pos1,$pos2)=each($letras)){
			echo "$pos2-";
		}
		echo "<br>";
	}

?>
</body>
</html>