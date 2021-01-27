<?php 

include("db.php");

	if (isset($_POST['guardar_dev'])) {

	$producto = $_POST['selectProductDev'];
	$devuelto = 'Disponible';
	$fecha = $_POST['fecha_dev'][0];
	$correo = $_POST['usuariosD'][0];
	$observaciones = $_POST['ObservacionesDev'][0];

	foreach ($_POST['selectProductDev'] as $i => $value) {

		$queryE = "INSERT INTO `devoluciones`(`fecha`, `correo`, `id_activo`, `observaciones_dev`) VALUES ('{$_POST['fecha_dev'][$i]}','{$_POST['usuariosD'][$i]}', '{$_POST['selectProductDev'][$i]}','{$_POST['ObservacionesDev'][$i]}')";
		$resultadoE = mysqli_query($con, $queryE);
		if(!$resultadoE){
			die("fallido");			
		}
		$updateEstadoDev = "UPDATE activos SET estado = '$devuelto' WHERE id_activo = $value"; 
		$updateQueryDev = mysqli_query($con, $updateEstadoDev);

		
		$actulizarFechasVacias ="UPDATE devoluciones SET fecha ='$fecha' WHERE fecha = 0000-00-00";
		$actualizarFechasQuery = mysqli_query($con, $actulizarFechasVacias);

		$actulizarCorreo ="UPDATE devoluciones SET correo ='$correo' WHERE correo =''";
		$actualizarCorreoQuery = mysqli_query($con, $actulizarCorreo);

		$actulizarObservaciones ="UPDATE devoluciones SET observaciones_dev ='$observaciones' WHERE observaciones_dev = '' ";
		$actualizarObsQuery = mysqli_query($con, $actulizarObservaciones);
		}
		$_SESSION['message'] = 'Guardado Exitosamente';
		$_SESSION['message_type'] = 'success';

		header("location: main.php");
	}
?>