<?php include("db.php")?>
<?php include("includes/header.php")?>
<?php

if (isset($_POST['guardarreparacion'])) {
	$id_activo = $_POST['id_activo_baja'];
	$autorizado_p = $_POST['autorizado_p'][0];
	$motivo = $_POST['motivo'][0];
	$obs_bajas = $_POST['obs_bajas'][0];
	$tipo_novedad = $_POST['tiponovedad'][0];
	$reparacion = 'Reparación';

		foreach ($_POST['id_activo_baja'] as $r => $value) {
					error_reporting(0);

			$query = "INSERT INTO bajas (id_activo, autorizado_por, motivo, observaciones_bajas, tipo_novedad) VALUES ('{$_POST['id_activo_baja'][$r]}', '{$_POST['autorizado_p'][$r]}','{$_POST['motivo'][$r]}', '{$_POST['obs_bajas'][$r]}', '{$_POST['tiponovedad'][$r]}')";
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
			
			if ($tipo_novedad == 'En_reparacion'){
				$updateEstadobaja = "UPDATE activos SET estado = '$reparacion' WHERE id_activo = $value"; 
				$updateQuerybaja = mysqli_query($con, $updateEstadobaja);
			}
		}
	}	
?>

<div class="container">
 <div class="modal-body ">
  <div class="card card-body" >
    <form action="savereparaciones.php" method="POST" autocomplete="off">
    <div class="form-group">
    	<h3>Producto</h3>
    	<select name="id_activo_rep[]" id="id_activo_rep"  multiple="multiple" class="id_activo_rep">
    		 <?php
                      $ultimosIds = $con->query ("SELECT * FROM bajas INNER JOIN activos ON bajas.id_activo = activos.id_activo WHERE tipo_novedad = 'En_reparacion'");    
                       while ($rows = $ultimosIds->fetch_assoc()) {                       
                       
                        $id = $rows['id_activo'];
                        $serie = $rows['serie'];
                        $placa = $rows['placa_inventario'];


                        echo "<option value='$id'>Serie: $serie ; Placa: $placa </option>";
                    }
                 ?>
    	</select>
    </div>        
    <div class="form-group" id="ubicacion_reparacion">
        <legend>Ubicación</legend>
          <input type="text" name="ubicacion[]" required>
    </div>
    <div class="form-group" id="fechaReparacion">
      <h3>Fecha de reparación</h3>
        <input type="date" class="form-control" placeholder="Fecha de reparación" autofocus name="fecha_reparacion[]">
    </div>
      <div class="form-group">
        <h3>Quien lo repara</h3>
          <input type="text" class="form-control" placeholder="Nombre del encargado" autofocus name="encargado[]" required>
      </div>
    <div class="form-group" id="obsReparacion">
        <legend>observaciones</legend>
          <textarea name="obsreparacion[]" rows="2" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-success btn-block" id="guardarReparacion" name="guardarReparacion" value="guardarReparacion">Guardar</button>
  	</form>
    </div>
 </div>
</div> 
 <?php include("includes/footer.php")?>