<?php include("db.php")?>
<?php include("includes/header.php")?>
	<div class="card">
		<div class="card-body p-4">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ingresosmodal">
				Agregar Datos
			</button>
		</div>
	</div>	
	<br>
	<h1>Tabla Ingresos</h1>
	<br>
	<?php if(isset($_SESSION['message'])) { ?>
		<div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
			<?= $_SESSION['message'] ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
 			</button>
		</div>
	<?php session_unset(); } ?>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Categoria</th>
      <th scope="col">Fabricante</th>
      <th scope="col">Modelo</th>
      <th scope="col">Serie</th>
      <th scope="col">Numero de placa</th>
      <th scope="col">Placa Inventario</th>
      <th scope="col">Fecha de compra</th>
      <th scope="col">Fecha vencimiento de garantia</th>
      <th scope="col">Valor</th>
      <th scope="col">Provedor</th>
      <th scope="col">Numero de Factura</th>
      <th scope="col">Disponibilidad</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  	<tbody>
  		<?php 
  			$queryprod ="SELECT * FROM ingresos";
  			$resultProd = mysqli_query($con, $queryprod);
  			while($row = mysqli_fetch_array($resultProd)) {?>
  			<tr>
  				<td><?php echo $row['nombre_p'] ?></td>
  				<td><?php echo $row['categoria'] ?></td>
  				<td><?php echo $row['fabricante'] ?></td>
  				<td><?php echo $row['modelo'] ?></td>
          <td><?php echo $row['serie'] ?></td>
          <td><?php echo $row['num_placa']?></td>
          <td><?php echo $row['placa_inventario']?></td>
          <td><?php echo $row['fecha_compra']?></td>
          <td><?php echo $row['ven_garantia']?></td>
          <td><?php echo $row['valor']?></td>
          <td><?php echo $row['provedor']?></td>
          <td><?php echo $row['num_factura']?></td>
          <td><?php echo $row['disponibilidad']?></td>
        
  				<td>
  					<a href="editarproductos.php?id_prod=<?php echo $row['id_prod'] ?>" class="btn btn-secondary">
  						<i class="fas fa-marker"></i>
  					</a>
  					<a href="borrarproductos.php?id_prod=<?php echo $row['id_prod']?>" class="btn btn-danger">
  						<i class="far fa-trash-alt"></i>
  					</a>
  				</td>
  			</tr>
  		<?php } ?>
  	</tbody>
</table>	

<!--Ingresos Modal -->
<div class="modal fade" id="ingresosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
			<form action="saveproductos.php" method="POST">	
        <div class="form-group">
          <h3>Serie</h3>
          <input type="text" class="form-control" placeholder="Serie" autofocus name="serie">
        </div>	
				<div class="form-group">
          <h3>Producto</h3>
					<input type="text" class="form-control" placeholder="Nombre Producto" autofocus name="nombre_p">
				</div>
				<div class="form-group">
          <h3>Categoria</h3>
					<input type="text" class="form-control" placeholder="Categoria" autofocus name="categoria">
				</div> 
				<div class="form-group">
          <h3>Fabricante</h3>
          <input type="text" class="form-control" placeholder="Fabricante" autofocus name="fabricante">
        </div>
				<div class="form-group">
          <h3>Modelo</h3>
					<input type="text" class="form-control" placeholder="Modelo" autofocus name="modelo">
				</div>
        <div class="form-group">
          <h3>Placa inventario</h3>
          <input type="text" class="form-control" placeholder="Placa Inventario" autofocus name="placa_inventario">
        </div>
        <div class="form-group">
          <h3>Fecha de compra</h3>
            <input type="date" class="form-control" placeholder="Fecha de compra" autofocus name="fecha_compra">
        </div>
        <div class="form-group">
          <h3>vencimiento de garantia</h3>
            <input type="date" class="form-control" placeholder="vencimiento garantia" autofocus name="ven_garantia">
        </div>
        <div class="form-group">
          <h3>Valor</h3>
           <input type="text" class="form-control" placeholder="Valor" autofocus name="valor">
        </div>
        <div class="form-group">
          <h3>Provedor</h3>
           <input type="text" class="form-control" placeholder="Provedor" autofocus name="provedor">
        </div>
        <div class="form-group">
          <h3>Numero de Factura</h3>
            <input type="text" class="form-control" placeholder="Numero de Factura" autofocus name="num_factura">
        </div>
        <div class="form-group">
            <h3>Numero de placa</h3>
            <input type="text" class="form-control" placeholder="Numero de placa" autofocus name="num_placa">
        </div>
        <div class="form-group">
            <h3>Disponibilidad</h3>
            <select name="disponibilidad" id="disponibilidad">Disponibilidad>
              <option disabled="">Selecione una opcion</option>
              <option value="Disponible">Disponible</option>
              <option value="No Disponible">No Disponible</option>
              <option value="No Disponible">En Mantenimiento</option>
              <option value="Dañado">Dañado</option>
            </select>
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


<?php include("includes/footer.php")?>