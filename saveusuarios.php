<?php 
include("db.php");
if(isset($_POST['guardar'])){
	$nombre = $_POST['nombre'];
	$cedula = $_POST['cedula'];
	$moneda = $_POST['moneda'];


	$queryu = "INSERT INTO usuarios(nombre, cedula, moneda)VALUES('$nombre','$cedula','$moneda')";
	$resultdadoU=mysqli_query($con, $queryu);
	if (!$resultdadoU) {
 	die("Fallido");
 	}

 	$_SESSION['message'] = 'Guardado Exitosamente';
 	$_SESSION['message_type'] = 'success';
 	header("Location: usuarios.php");
 	
}
?>
