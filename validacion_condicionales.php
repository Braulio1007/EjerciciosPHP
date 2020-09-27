<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php
	if(isset($_POST["enviando"])){
		$edad=$_POST["edad_usuario"];
		$nombre=$_POST["nombre_usuario"];
		
		switch($edad){
			case $edad<=18:
			echo"Hola $nombre. Eres menor de edad";
			break;
			
			case $edad<=40:
			echo"Hola $nombre. Eres menor joven";
			break;
			
			case $edad<=65:
			echo"Hola $nombre. Eres menor de maduro";
			break;
			
			default:
			echo "Cuidate";
		}
		
		/*if($edad<=18){
			echo "<p class='validado'>Eres menor de edad</p>";
		}else if($edad<=40){
			echo "<p class='validado'>Eres joven</p>";	
		}else if($edad<=65){
			echo "<p class='validado'>Eres maduro</p>";	
		}else{
			echo "<p class='validado'>Cuidate</p>";	
		}
		
		
		
		$resultado= $nombre=="Braulio" && $contraseña=="3728" ? "Puedes acceder." : "No puedes acceder";
		echo $resultado;
		*/
		/*
		switch(true){
			case $nombre=="Braulio" && $contraseña=="3728":
			echo"Usuario autorizado. Hola $nombre";
			break;
			
			case $nombre=="Esmeralda" && $contraseña=="3727":
			echo"Usuario autorizado. Hola $nombre";
			break;
			
			case $nombre=="Maria" && $contraseña=="3726":
			echo"Usuario autorizado. Hola $nombre";
			break;
			
			default:
			echo "Usuario no identidicado";
		}
		*/
		
	}
?>