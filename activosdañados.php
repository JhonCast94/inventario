<?php include("db.php")?>
<?php include("includes/header.php")?>
<?php

if (isset($_POST['guardardamaged'])) {
	$id_activo = $_POST['id_activo_baja'];
	$autorizado_p = $_POST['autorizado_p'][0];
	$motivo = $_POST['motivo'][0];
	$obs_bajas = $_POST['obs_bajas'][0];
	$tipo_novedad = $_POST['tiponovedad'][0];
	$damaged = 'Dañado';

	foreach ($_POST['id_activo_baja'] as $b => $value) {

		error_reporting(0);

			$query = "INSERT INTO bajas (id_activo, autorizado_por, motivo, observaciones_bajas, tipo_novedad) VALUES ('{$_POST['id_activo_baja'][$b]}', '{$_POST['autorizado_p'][$b]}','{$_POST['motivo'][$b]}','{$_POST['obs_bajas'][$b]}','{$_POST['tiponovedad'][$b]}')";
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
				
			if ($tipo_novedad == 'Dañado'){
				$updateEstadobaja = "UPDATE activos SET estado = '$damaged' WHERE id_activo = $value"; 
				$updateQuerybaja = mysqli_query($con, $updateEstadobaja);
			}	
		}
	}	
?>


<div class="container">
 <div class="modal-body ">
  <div class="card card-body" >
    <form action="savedañados.php" method="POST" autocomplete="off" id="savedañados">
    <div class="form-group">

  	<div class="form-group">
      <legend>Validado por</legend>
        <select name="validado_p[]" id="validado_p">
          <option>Mauricio Gutierrez</option>
        </select>
	</div>
    	<h3>Producto</h3>
    	<select name="id_activo_D[]" id="id_activo_D"  multiple="multiple" class="id_activo_D">
    		 <?php
                      $ultimosIds = $con->query ("SELECT * FROM bajas INNER JOIN activos ON bajas.id_activo = activos.id_activo WHERE tipo_novedad = 'Dañado'");    
                       while ($rows = $ultimosIds->fetch_assoc()) {                      
                       	
                       	$id = $rows['id_activo'];
                       	$serie = $rows['serie'];
                       	$placa = $rows['placa_inventario'];


                        echo "<option value='$id'>Serie: $serie ; Placa: $placa </option>";
                      }
                     ?>
    	</select>
    </div>        
    <div class="form-group">
                    <legend>Seleccione usuario</legend>
                      <select name="usuarioDam[]" id="usuarioDam" class="usuarioDam">
                        <?php
                          $select_query = $con->query ("SELECT * FROM usuarios");
                          while($rows = $select_query->fetch_assoc())
                          {
                            $identficacion = $rows['id_identificacion'];
                            $user_name = $rows['nombre'];
                          
                           echo "<option value='$identficacion'>$user_name</option>";
                          }
                        ?>
                      </select>
                  </div>
			    <div class="form-group" id="obsD">
			        <legend>observaciones</legend>
			          <textarea name="obsD[]" rows="2" class="form-control" required></textarea>
			    </div>
		    <button type="submit" class="btn btn-success btn-block" id="guardarD" name="guardarD" value="guardarD">Guardar</button>
  	</form>
    </div>
 </div>
</div> 
 <?php include("includes/footer.php")?>