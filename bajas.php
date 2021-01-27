<?php include("db.php")?>
<?php include("includes/header.php")?>

<div class="container p-4">
	<div class="card">
		<div class="card-body">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bajasmodal">
        Agregar Datos
      </button>
		</div>
	</div>
	<br>
		<h1>Tabla Bajas</h1>
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
		      <th scope="col">Producto</th>
          <th scope="col">Categoria</th>
		      <th scope="col">fabricante</th>
		      <th scope="col">Modelo</th>
          <th scope="col">Serie</th>
          <th scope="col">Numero de placa</th>
		      <th scope="col">Placa Inventario</th>
          <th scope="col">Numero de factura</th>
          <th scope="col">Provedor</th>		     
		      <th scope="col">Acción</th>
		    </tr>
  		</thead>
      	<tbody>
          <?php 
          $query = "SELECT * FROM bajas";
          $result_task = mysqli_query($con, $query);

        while( $row = mysqli_fetch_array($result_task)) { ?>
          <tr>
            <td><?php echo $row ['nombre_p'] ?></td>
            <td><?php echo $row ['categoria'] ?></td>
            <td><?php echo $row ['fabricante'] ?></td>
            <td><?php echo $row ['modelo'] ?></td>
            <td><?php echo $row ['serie'] ?></td>
            <td><?php echo $row ['num_placa'] ?></td>
            <td><?php echo $row ['placa_inventario'] ?></td>
            <td><?php echo $row ['num_factura'] ?></td>
            <td><?php echo $row ['provedor'] ?></td>            
            <td>
              <a href="editarbajas.php?id_baja=<?php echo $row['id_baja'] ?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="borrarbajas.php?id_baja=<?php echo $row['id_baja']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
	</table>
<!--Bajas modal -->
<div class="modal fade" id="bajasmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Agregar datos</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-body">
      <form action="savebajas.php" method="POST" autocomplete="none">
        <div class="form-group">
                <legend>Seleccione el codigo de serie</legend>
                  <select name="productos" id="productos" class="productos">
                    <?php
                      $select_query = $con->query ("SELECT * FROM ingresos");
                      while($rows = $select_query->fetch_assoc())
                      {
                        $id = $rows['serie'];
                      
                       echo "<option value='$id'>$id</option>";
                      }
                    ?>
                  </select>
              </div>
              <div class="form-group">
                <legend>Seleccione el Producto</legend>
                  <select name="nombre_p" id="nombrep" class="nombrep">
                    <?php
                      $select_query = $con->query ("SELECT * FROM ingresos");
                      while($rows = $select_query->fetch_assoc())
                      {
                        $product_name = $rows['nombre_p'];
                      
                       echo "<option value='$product_name'>$product_name</option>";
                      }
                    ?>
                  </select>
              </div>
              <div class="form-group">
                <legend>Seleccione la categoria</legend>
                  <select name="categoria" id="categoria" class="categoria">
                    <?php
                      $select_query = $con->query ("SELECT * FROM ingresos");
                      while($rows = $select_query->fetch_assoc())
                      {
                        $categoria = $rows['categoria'];
                      
                       echo "<option value='$categoria'>$categoria</option>";
                      }
                    ?>
                  </select>
              </div>
              <div class="form-group">
                <legend>Seleccione el fabricante</legend>
                  <select name="fabricante" id="fabricante" class="fabricante">
                    <?php
                      $select_query = $con->query ("SELECT * FROM ingresos");
                      while($rows = $select_query->fetch_assoc())
                      {
                        $fabricante = $rows['fabricante'];
                      
                       echo "<option value='$fabricante'>$fabricante</option>";
                      }
                    ?>
                  </select>
              </div>
              <div class="form-group">
                <legend>Seleccione el modelo</legend>
                  <select name="modelo" id="modelo" class="modelo">
                    <?php
                      $select_query = $con->query ("SELECT * FROM ingresos");
                      while($rows = $select_query->fetch_assoc())
                      {
                        $modelo = $rows['modelo'];
                      
                       echo "<option value='$modelo'>$modelo</option>";
                      }
                    ?>
                  </select>
              </div>
              <div class="form-group">
                <legend>Seleccione placa de inventario</legend>
                  <select name="placa_inventario" id="placainv" class="placainv">
                    <?php
                      $select_query = $con->query ("SELECT * FROM ingresos");
                      while($rows = $select_query->fetch_assoc())
                      {
                        $placainv = $rows['placa_inventario'];
                      
                       echo "<option value='$placainv'>$placainv</option>";
                      }
                    ?>
                  </select>
              </div>
              <div class="form-group">
                <legend>Seleccione el provedor</legend>
                  <select name="provedor" id="provedor" class="provedor">
                    <?php
                      $select_query = $con->query ("SELECT * FROM ingresos");
                      while($rows = $select_query->fetch_assoc())
                      {
                        $provedor = $rows['provedor'];
                      
                       echo "<option value='$provedor'>$provedor</option>";
                      }
                    ?>
                  </select>
              </div>
              <div class="form-group">
                <legend>Seleccione numero de factura</legend>
                  <select name="num_factura" id="num_factura" class="num_factura">
                    <?php
                      $select_query = $con->query ("SELECT * FROM ingresos");
                      while($rows = $select_query->fetch_assoc())
                      {
                        $num_factura = $rows['num_factura'];
                      
                       echo "<option value='$num_factura'>$num_factura</option>";
                      }
                    ?>
                  </select>
              </div>
              <div class="form-group">
                <legend>Seleccione numero de placa</legend>
                  <select name="num_placa" id="num_placa" class="num_placa">
                    <?php
                      $select_query = $con->query ("SELECT * FROM ingresos");
                      while($rows = $select_query->fetch_assoc())
                      {
                        $num_placa = $rows['num_placa'];
                      
                       echo "<option value='$num_placa'>$num_placa</option>";
                      }
                    ?>
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
</div>

<?php include("includes/footer.php")?>

