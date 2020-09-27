<style>
	.resultado{
		color:#F00;
		font-weigth:bold;
		font-size:32px;
	}

</style>


<?php
	
	
	function calcular($calculo){
		if(!strcmp("Suma",$calculo)){
			global $N1;
			global $N2;
			$resultado=$N1+$N2;
			echo "<p class='resultado'>El resultado es: $resultado</p>";
		}
		if(!strcmp("Resta",$calculo)){
			global $N1;
			global $N2;
			$resultado=$N1-$N2;
			echo "<p class='resultado'>El resultado es: $resultado</p>";
		}
		if(!strcmp("Multiplicación",$calculo)){
			global $N1;
			global $N2;
			$resultado=$N1*$N2;
			echo "<p class='resultado'>El resultado es: $resultado</p>";
		}
		if(!strcmp("División",$calculo)){
			global $N1;
			global $N2;
			$resultado=$N1/$N2;
			echo "<p class='resultado'>El resultado es: $resultado</p>";
		}
		if(!strcmp("Módulo",$calculo)){
			global $N1;
			global $N2;
			$resultado=$N1%$N2;
			echo "<p class='resultado'>El resultado es: $resultado</p>";
		}
		if(!strcmp("Incremento",$calculo)){
			global $N1;
			$N1++;
			$resultado=$N1;
			echo "<p class='resultado'>El resultado es: $resultado</p>";
		}
		if(!strcmp("Decremento",$calculo)){
			global $N1;
			$N1--;
			$resultado=$N1;
			echo "<p class='resultado'>El resultado es: $resultado</p>";
		}
	}

?>