<?php
include("db.php");

if (isset($_POST['guardarReparacion'])) {
	$id_activo = $_POST['id_activo_rep'];
	$ubicacion = $_POST['ubicacion'][0];
	$fecha_reparacion = $_POST['fecha_reparacion'][0];
	$encargado = $_POST['encargado'][0];
	$obsreparacion = $_POST['obsreparacion'][0];
	$disponible = 'Disponible';

	foreach ($_POST['id_activo_rep'] as $rep => $value) {

		$queryreparacion = "INSERT INTO reparaciones (id_activo, ubicacion, fecha, encargado, observaciones_rep) VALUES ('{$_POST['id_activo_rep'][$rep]}', '{$_POST['ubicacion'][$rep]}', '{$_POST['fecha_reparacion'][$rep]}', '{$_POST['encargado'][$rep]}', '{$_POST['obsreparacion'][$rep]}')";

		$resultado = mysqli_query($con, $queryreparacion);
		if (!$resultado) {
			die("Query fallido");
		}

		$queryubicacion = "UPDATE reparaciones SET ubicacion = '$ubicacion' WHERE ubicacion = ''"; 
		$updateubicacion = mysqli_query($con, $queryubicacion);

		$queryfecha = "UPDATE reparaciones SET fecha = '$fecha_reparacion' WHERE fecha = 0000-00-00"; 
		$updatefecha = mysqli_query($con, $queryfecha);

		$queryubicacion = "UPDATE reparaciones SET encargado = '$encargado' WHERE encargado = ''"; 
		$updateubicacion = mysqli_query($con, $queryubicacion);

		$queryobs = "UPDATE reparaciones SET observaciones_rep = '$obsreparacion' WHERE observaciones_rep = ''"; 
		$updateObs = mysqli_query($con, $queryobs);

	}

	$_SESSION['message'] = 'Guardado Exitosamente';
	$_SESSION['message_type'] = 'success';
	header("Location: main.php");
}

?>