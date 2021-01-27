<?php 
include("db.php");

if (isset($_POST['activoReparado'])) {

      $Activo = $_POST['activoEnReparacion'];
      $Disponible = 'Disponible';

      	foreach ($_POST['activoEnReparacion'] as $AR => $value) {

	      $activoReparado = "UPDATE activos SET estado = '$Disponible' WHERE id_activo = $value";
	      $actualizarActivo = mysqli_query($con, $activoReparado);
	    }  
  	}
  	$_SESSION['message'] = 'Guardado Exitosamente';
	$_SESSION['message_type'] = 'success';
	header("Location: main.php");

?>