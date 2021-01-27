<?php include("db.php")?>
<?php include("includes/header.php")?>
<?php 

if (isset($_POST['guardarActivoAsig'])){
  $estadoprod = 'Disponible';
  $pais = $_POST['pais'];
  $num_serie = $_POST['serie'];
  $categoria = $_POST['categoria_activo'];
  $id_prod = $_POST['selectProduct'];
  $placa_inventario = $_POST['placa_inventario'];
  $fecha_compra = $_POST['fecha_compra'];
  $ven_garantia = $_POST['ven_garantia'];
  $moneda = $_POST['moneda'];
  $valor = $_POST['valor'];
  $provedor = $_POST['provedor'];
  $num_factura = $_POST['num_factura'];

    $queryA = "INSERT INTO activos (estado, pais, serie, categoria, id_prod, placa_inventario, fecha_compra, ven_garantia, moneda, valor, provedor, num_factura) VALUES ('$estadoprod' ,'$pais', '$num_serie', '$categoria', '$id_prod', '$placa_inventario', '$fecha_compra', '$ven_garantia', '$moneda', '$valor', '$provedor', '$num_factura')";
    
  $resultadoA = mysqli_query($con, $queryA);    
  if(!$resultadoA){
    die("Query fallido");
  } 

}
?>

<div class="container">
 <div class="modal-body ">
  <div class="card card-body" >
    <form action="saveasignaciones.php" method="POST" autocomplete="off" id="asigform">    
       <div class="form-group">
                  <legend>Selecione fecha</legend>
                    <input type="date" name="fecha_asig[]" id="fecha_asig">
                </div>
              <hr>
              <div class="form-group">
                <legend>Agregar observación</legend>
                <textarea name="observacion_asig[]" id="observacion_asig" rows="2" required></textarea> 
                </div>
                  <hr>
                  <div class="form-group">
                    <legend>Seleccione usuario</legend>
                      <select name="correo[]" id="usuarioA" class="usuarioA">
                        <?php
                          $select_query = $con->query ("SELECT * FROM usuarios");
                          while($rows = $select_query->fetch_assoc())
                          {
                            $correo = $rows['correo'];
                            $user_name = $rows['nombre'];
                          
                           echo "<option value='$correo'>$user_name</option>";
                          }
                        ?>
                      </select>
                  </div>
                  <hr>            
                  <div class="form-group">
                    <legend>Categoria</legend>
                      <select name="categoriaprodAsig" id="categoriaprodAsig" class="categoriaprodAsig">                        
                        <?php
                          if(isset($_POST['guardarActivoAsig'])){
                                              
                            $categoria = $_POST['categoria_activo'];

                            echo "<option value='$categoria'>$categoria</option>";
                          }
                          ?>
                      </select>
                  </div>         
                  <div class="form-group">
                    <legend>Producto</legend>
                      <table class="table table-boardered"  name="selectProductAsig" id="selectProductAsig">

                      </table>
                  </div>
                  <button type="submit" class="btn btn-success btn-block" id="guardarAsig" name="guardarAsig" value="guardarAsig">Guardar</button> 
      </form>
    </div>
 </div>
</div> 
<?php include("includes/footer.php")?>