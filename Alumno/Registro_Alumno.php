<?php 

include("Database.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $nombre = trim($_POST['nom_alu']);
	    $name = trim($_POST['apa_pat']);
        $name = trim($_POST['ape_mat']);
        $name = trim($_POST['contraseña']);
        $name = trim($_POST['matricula']);
        $name = trim($_POST['carrera']);
        $name = trim($_POST['serv']);
        $email = trim($_POST['correo_electronico']);
        $name = trim($_POST['direccion']);
        $name = trim($_POST['telefono_cel']);
	    $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h2 class="ok">¡Se registraron los datos correctamente!</h2>
           <?php
	    } else {
	    	?> 
	    	<h2 class="bad">¡Ups ha ocurrido un error!</h2>
           <?php
	    }
    }   else {
	    	?> 
	    	<h2 class="bad">¡Por favor complete los campos!</h2>
           <?php
    }
}

?>