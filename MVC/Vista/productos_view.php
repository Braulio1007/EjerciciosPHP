<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

	td{
		border:1px dotted #FF000;	
	}
	
</style>

</head>

<body>
<table>
<tr><td>Nombre del Artículo</td>

<?php

	foreach($matriz_producto as $registro){
	
		echo "<tr><td>" . $registro["NOMBREARTÍCULO"] . "</tr></td>";
			
	}

?>

</table>
</body>
</html>