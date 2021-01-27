<?php include("db.php")?>

<?php

if (isset($_POST['guardarD'])) {
	$validadoPor = $_POST['validado_p'][0];
	$activo = $_POST['id_activo_D'];
	$identificacion = $_POST['usuarioDam'][0];
	$observaciones = $_POST['obsD'][0];

	foreach ($_POST['id_activo_D'] as $d => $value) {

		$query = "INSERT INTO dañados (validado_por, id_activo, id_identificacion, dañado_obs) VALUES ('{$_POST['validado_p'][$d]}', '{$_POST['id_activo_D'][$d]}' , '{$_POST['usuarioDam'][$d]}', '{$_POST['obsD'][$d]}')";

		$resultado = mysqli_query($con, $query);
		if(!$resultado){
				die("fallido");
		}

		$actulizarObservaciones = "UPDATE dañados SET validado_por ='$validadoPor' WHERE validado_por = '' ";
		$actualizarObsQuery = mysqli_query($con, $actulizarObservaciones);

		$actulizarObservaciones = "UPDATE dañados SET id_identificacion ='$identificacion' WHERE id_identificacion = '' ";
		$actualizarObsQuery = mysqli_query($con, $actulizarObservaciones);

		$actulizarObservaciones = "UPDATE dañados SET dañado_obs ='$observaciones' WHERE dañado_obs = '' ";
		$actualizarObsQuery = mysqli_query($con, $actulizarObservaciones);


	}	
		$_SESSION['message'] = 'Guardado Exitosamente';
		$_SESSION['message_type'] = 'success';
		header("Location: main.php");

}
?>