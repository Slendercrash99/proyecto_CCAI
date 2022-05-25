
<?php 

include("Database.php");
$nom_prof=$_POST['nom_prof'];
$sql="SELECT * FROM profesores WHERE nom_prof='$nom_prof'";
$result=mysqli_query($conexion,$sql);
if ($result) {
	$row=mysqli_fetch_array($result);
	$count=mysqli_num_rows($result);
	if ($count==0) {
		$nom_prof=$_POST['nom_prof'];
		$ape_pat=$_POST['ape_pat'];
		$ape_mat=$_POST['ape_mat'];
		$clave=$_POST['clave'];
		$correo=$_POST['correo'];
		$contraseña=$_POST['contraseña'];
		$contraseña2=$_POST['contraseña2'];
		$division=$_POST['division'];
		$direccion=$_POST['direccion'];
		$telefono_cel=$_POST['telefono_cel'];
		if ($contraseña!=$contraseña2) {
			header('Location: registro_prof.html');
		}else{
			$sql="INSERT into profesores (profesor_id,nom_prof,ape_pat,ape_mat,clave,correo,contraseña,division,direccion,telefono_cel)
			VALUES ('','$nom_prof','$ape_pat','$ape_mat','$clave','$correo','$contraseña','$division','$direccion','$telefono_cel')";
			$result=mysqli_query($conexion,$sql);
			$profesor_id=mysqli_insert_id($conexion);
			session_start();
			$_SESSION['profesor_id']=$profesor_id;
			$_SESSION['nom_prof']=$nom_prof;
			$_SESSION['ape_pat']=$ape_pat;
			$_SESSION['ape_mat']=$ape_mat;
			$_SESSION['clave']=$clave;
			$_SESSION['correo']=$correo;
			$_SESSION['division']=$division;
			$_SESSION['direccion']=$direccion;
			$_SESSION['telefono_cel']=$telefono_cel;
			header('Location: home.php');
			}
	    } else {
	    	?> 
	    	<h2 class="bad">¡Ups ha ocurrido un error!</h2>
           <?php
	    }
      } else {
	    	?> 
	    	<h2 class="bad">¡Por favor complete los campos!</h2>
           <?php
    }
}

?>