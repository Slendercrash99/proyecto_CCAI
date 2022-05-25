<?php
	$conexion=mysqli_connect("localhost", "root", "", "proyecto");  
	if ($conexion==true){
		echo "Conectado";
	}else{
		echo "no Conectado";
	}
	
?>