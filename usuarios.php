<?php include("db.php")?>
<?php include("includes/header.php")?>
<div class="container p-4">
	<div class="card">
		<div class="card-body">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#usuariosmodal">
				Agregar Datos
			</button>
		</div>
	</div>	
<br>
<h1>Tabla Usuarios</h1>
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
      <th scope="col">ID Usuario</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cedula</th>
      <th scope="col">moneda</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  	<tbody>
  		<?php 
  		$query = "SELECT * FROM usuarios";
  		$result_task = mysqli_query($con, $query);

  		while( $row = mysqli_fetch_array($result_task)) { ?>
  			<tr>
  				<td><?php echo $row ['id_usuario'] ?></td>
  				<td><?php echo $row ['nombre'] ?></td>
  				<td><?php echo $row ['cedula'] ?></td>
          <td><?php echo $row ['moneda'] ?></td>
  				<td>
  					<a href="editarusuarios.php?id_usuario=<?php echo $row['id_usuario'] ?>" class="btn btn-secondary">
  						<i class="fas fa-marker"></i>
  					</a>
  					<a href="borrarusuarios.php?id_usuario=<?php echo $row['id_usuario']?>" class="btn btn-danger">
  						<i class="far fa-trash-alt"></i>
  					</a>
  				</td>
  			</tr>
  		<?php } ?>
  	</tbody>
<!-- Modal -->
<div class="modal fade" id="usuariosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Agregar datos a Usuarios</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-body">
			<form action="saveusuarios.php" method="POST">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Nombre" autofocus name="nombre" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Correo" autofocus name="correo"required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Cedula" autofocus name="cedula" required>
				</div>
        <div class="form-group">
          <input type="text" name="moneda[]" required>
          <input type="checkbox" value="dolar" name="moneda[]">Dolares
          <input type="checkbox" value="peso" name="moneda[]">Pesos<br>
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