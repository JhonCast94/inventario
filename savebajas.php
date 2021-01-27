<?php
include("db.php");

if (isset($_POST['guardar_baja'])) {
	$id_activo = $_POST['id_activo_baja'];
	$autorizado_p = $_POST['autorizado_p'][0];
	$motivo = $_POST['motivo'][0];
	$obs_bajas = $_POST['obs_bajas'][0];
	$tipo_novedad = $_POST['tiponovedad'][0];
	$baja = 'Baja';

		foreach ($_POST['id_activo_baja'] as $b => $value) {
						
			$query = "INSERT INTO bajas (id_activo, autorizado_por, motivo, observaciones_bajas, tipo_novedad) VALUES ('{$_POST['id_activo_baja'][$b]}', '{$_POST['autorizado_p'][$b]}','{$_POST['motivo'][$b]}', '{$_POST['obs_bajas'][$b]}', '{$_POST['tiponovedad'][$b]}')";
			$resultado = mysqli_query($con, $query);
			if (!$resultado) {
				die("Query Fallido");
			}

			$queryAutorizadoPor = "UPDATE bajas SET autorizado_por = '$autorizado_p' WHERE autorizado_por = ''"; 
			$updateAutorizado = mysqli_query($con, $queryAutorizadoPor);

			$queryMovtivo = "UPDATE bajas SET motivo = '$motivo' WHERE motivo = ''"; 
			$updateAutorizado = mysqli_query($con, $queryMovtivo);

			$queryobs = "UPDATE bajas SET observaciones_bajas = '$obs_bajas' WHERE observaciones_bajas = ''"; 
			$updateObs = mysqli_query($con, $queryobs);

			$queryNovedad = "UPDATE bajas SET tipo_novedad = '$tipo_novedad' WHERE tipo_novedad = ''"; 
			$updateNovedad = mysqli_query($con, $queryNovedad);
			
			if ($tipo_novedad == 'De_baja'){
				$updateEstadobaja = "UPDATE activos SET estado = '$baja' WHERE id_activo = $value"; 
				$updateQuerybaja = mysqli_query($con, $updateEstadobaja);
			}	
		}		
	}
	$_SESSION['message'] = 'Guardado Exitosamente';
	$_SESSION['message_type'] = 'success';
	header("Location: main.php");
?>