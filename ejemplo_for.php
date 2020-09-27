<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<?php
    	
		for($i=1; $i<=10; $i++){
			echo "<br>";
			for($j=1; $j<=10; $j++){
			echo "<p>$i x $j = " . ($i*$j) . "</p>";
			}
		}
		echo "Hemos salido del FOR";
	
	?>
</body>
</html>