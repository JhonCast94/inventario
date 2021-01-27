<?php 
include("db.php");

if (isset($_POST['guardarAsig'])) {
	$fecha_asig = $_POST['fecha_asig'][0];
	$observacion_asig = $_POST['observacion_asig'][0];
	$correo = $_POST['correo'][0];
	$id_activo = $_POST['selectProductAsig'];
	$asignado = 'Asignado';
	
	foreach ($_POST['selectProductAsig'] as $a => $value) {


		
		$queryAsig = "INSERT INTO asignaciones (fecha, observaciones_asig, correo, id_activo) VALUES ('{$_POST['fecha_asig'][$a]}', '{$_POST['observacion_asig'][$a]}', '{$_POST['correo'][$a]}','{$_POST['selectProductAsig'][$a]}')";

		$resultado = mysqli_query($con, $queryAsig);
		if (!$resultado) {
			die("Query fallido");
			}

		$actulizarFechasVacias ="UPDATE asignaciones SET fecha = '$fecha_asig' WHERE fecha = 0000-00-00";
		$actualizarFechasQuery = mysqli_query($con, $actulizarFechasVacias);

		$actulizarObservaciones ="UPDATE asignaciones SET observaciones_asig ='$observacion_asig' WHERE observaciones_asig = '' ";
		$actualizarObsQuery = mysqli_query($con, $actulizarObservaciones);

		$actulizarCorreo ="UPDATE asignaciones SET correo ='$correo' WHERE correo =''";
		$actualizarCorreoQuery = mysqli_query($con, $actulizarCorreo);	

		$updateEstadoAsig = "UPDATE activos SET estado = '$asignado' WHERE id_activo = $value"; 
		$updateQueryAsig = mysqli_query($con, $updateEstadoAsig);

	}	
							
	$_SESSION['message'] = 'Guardado Exitosamente';
	$_SESSION['message_type'] = 'success';
	header("Location: main.php");
	}
?>