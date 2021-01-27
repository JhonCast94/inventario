<?php include("db.php")?>
<?php include("includes/header.php")?>
<div class="container p-4">
	<div class="card">
		<div class="card-body">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#asignacionesmodal">
				Agregar Datos
			</button>
		</div>
	</div>	
	<br>
	<h1>Tabla Asignaciones</h1>
	<br>
	<?php if (isset($_SESSION['message'])) { ?>
		<div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
			<?= $_SESSION['message'] ?>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>		
	<?php session_unset(); } ?>
	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Fecha</th>
      <th scope="col">Usuario</th>
      <th scope="col">Producto</th>
      <th scope="col">Extras</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  	<tbody>
  		<?php
  		$query = mysqli_query($con,"SELECT * FROM asignaciones INNER JOIN activos ON asignaciones.serie = activos.serie INNER JOIN usuarios ON asignaciones.id_usuario = usuarios.id_usuario");
  		    while($row= mysqli_fetch_array($query)) { ?>
  			<tr>
  				<td><?php echo $row['id_asignacion']?></td>
  				<td><?php echo $row['fecha']?></td>
  				<td><?php echo $row['nombre']?></td>          
  				<td><?php echo $row['nombre_p']?></td>
          <td><?php echo $row['extras']?></td>
  				<td>
  					<a href="editarasignaciones.php?id_asignacion=<?php echo $row['id_asignacion'] ?>" class="btn btn-secondary">
  						<i class="fas fa-marker"></i>
  					</a>
  					<a href="borrarasignaciones.php?id_asignacion=<?php echo $row['id_asignacion']?>" class="btn btn-danger">
  						<i class="far fa-trash-alt"></i>
  					</a>
  				</td>
  			</tr>
  		<?php } ?>
  	</tbody>
</table>	
<!-- Asignaciones modal -->
<div class="modal fade" id="asignacionesmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Agregar Datos</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card card-body">
        <form action="saveasignaciones.php" method="POST" autocomplete="off">
          
            <div class="form-group">
              <legend>Selecione fecha</legend>
                <input type="date" name="fecha_asig">
            </div>
          <hr>
          <div class="form-group">
            <legend>Agregar Usuario</legend>
            <select name="id_usuario" id="usuariosI" class="usuarios">
              <?php
                $select_query = $con->query ("SELECT * FROM usuarios");
                while($rows = $select_query->fetch_assoc())
                {
                  $id_usuario = $rows['id_usuario'];
                  $nombre = $rows['nombre'];
                
                 echo "<option value='$id_usuario'$nombre'>$id_usuario. $nombre</option>";
                }
              ?>
            </select>

            </div>
              <hr>
              <div class="form-group">
                <legend>Seleccione el Producto</legend>
                  <select name="serie" id="productos" class="productos">
                    <?php
                      $select_query = $con->query ("SELECT * FROM ingresos");
                      while($rows = $select_query->fetch_assoc())
                      {
                        $id = $rows['serie'];
                        $product_name = $rows['nombre_p'];
                      
                       echo "<option value='$id'>$product_name</option>";
                      }
                    ?>
                  </select>
              </div>
              <hr>
              <div class="form-group">
                <legend>Observaciones</legend>
                <textarea name="observacionesA" rows="2" class="form-control"></textarea>
            </div>
				<input type="submit" class="btn btn-success btn-block" name="guardar" value="guardar">
			</form>
		</div>
		  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
	</div>
      </div>
    
<?php include("includes/footer.php")?>