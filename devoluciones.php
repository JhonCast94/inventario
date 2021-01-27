<?php include("db.php")?>
<?php include("includes/header.php")?>

<div class="container p-4">
	<div class="card">
		<div class="card-body">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#devolucionesmodal">
				Agregar Datos
			</button>
		</div>
	</div>	
	<br>
	<h1>Tabla Devoluciones</h1>
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
  		$queryE= mysqli_query($con,"SELECT * FROM devoluciones INNER JOIN ingresos ON devoluciones.serie = ingresos.serie INNER JOIN usuarios ON devoluciones.id_usuario = usuarios.id_usuario");
  		while($row = mysqli_fetch_array($queryE)) {?>
		  	<tr>
		      <th><?php echo $row['id_dev']?></th>
		      <td><?php echo $row['fecha']?></td>
		      <td><?php echo $row['nombre_p']?></td>
		      <td><?php echo $row['nombre']?></td>
		      <td><?php echo $row['extras_dev']?></td>
		      <td>
		      	<a href="editardevoluciones.php?id_dev=<?php echo $row['id_dev']?>" class="btn btn-secondary" ><i class="fas fa-marker"></i></a>
		     	<a href="borrardevoluciones.php?id_dev=<?php echo $row['id_dev']?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
		 	 </td>

		    </tr>
  		<?php } ?>	
    
  </tbody>
</table>

<!-- Devoluciones modal -->
<div class="modal fade" id="devolucionesmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Agregar datos a Entradas</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-body">
			<form action="savedevoluciones.php" method="POST">
			<div class="form-group">
            	<legend>Selecione fecha</legend>
            	<input type="date" name="fecha_dev">
        	</div>
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
		            <legend>Agregar Usuario</legend>
		            <select name="id_usuario" id="usuarios" class="usuarios">
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
	                <legend>Extras</legend>
	                	<textarea name="extras" rows="2" class="form-control"></textarea>
	            </div>
				<input type="submit" class="btn btn-success btn-block" name="guardar" value="guardar">
			</form>
		</div>
      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	      </div>
    </div>
  </div>
</div>
<?php include("includes/footer.php")?>
