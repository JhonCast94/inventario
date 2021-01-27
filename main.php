<?php include("db.php")?>
<?php include("includes/header.php")?>

	<div class="container">
    <br>
    <br>
      <div class="card m-4">
        <div class="card-body">
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ingresoproductos">
            Gestionar catalogo
          </button>
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#activosmodal">
            Ingresar activo
          </button>
           <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#asignacionesmodal">
            Generar asignacion
          </button> 
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#devolucionesmodal">
            Generar devolucion
          </button> 
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#bajasmodal">
            Generar novedad
          </button>
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#verreparacion">Activos en reparación
          </button>


        </div>
      </div> 
    	<br>
      <br>
     	<?php if(isset($_SESSION['message'])){?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php } ?>  
    <div class="iframe">
      <iframe width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=1a1605ab-944b-47ab-b400-9f21b23ee321&autoAuth=true&ctid=249bb730-97be-413c-815a-77ccfa75c445&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXNvdXRoLWNlbnRyYWwtdXMtcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D" frameborder="0" allowFullScreen="true"></iframe>
    </div>



<!--Catalogo Modal -->
<div class="modal fade" id="ingresoproductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Agregar Datos</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
          <div class="modal-body">
           <div class="card card-body">
            <form method="POST" autocomplete="off" action="saveproductos.php" name="productosForm"> 
            <div class="form-row">
              <div class="form-group col-md-6">                
                <h3>Categoria</h3>                
                  <select name="categoria_prod" id="categoria_catalogo" required>
                  <option>--Selecione una opción--</option>
                  <option value="ACCES POINT">ACCES POINT</option>
                  <option value="Access Point Blanco">Access Point Blanco</option>
                  <option value="AIRE ACONDICIONADO">AIRE ACONDICIONADO</option>
                  <option value="CAMARA DE VIDEO">CAMARA DE VIDEO</option>
                  <option value="CAMARA FOTOGRAFICA">CAMARA FOTOGRAFICA</option>
                  <option value="Cargador Fortinet CON CABLE DE PODER">Cargador Fortinet CON CABLE DE PODER</option>
                  <option value="CIS SG220-26 26-PORT GIGABIT SMART PLUS SWITCH ">CIS SG220-26 26-PORT GIGABIT SMART PLUS SWITCH</option>
                  <option value="COMPUTADOR DE  ESCRITORIO">COMPUTADOR DE  ESCRITORIO</option>
                  <option value="Portatíl">Portatíl</option>
                  <option value="CPU">CPU</option>
                  <option value="DescansaPies">DescansaPies</option>
                  <option value="Diadema">Diadema</option>
                  <option value="Diadema telefonica">Diadema telefonica</option>
                  <option value="Diadema USB">Diadema USB</option>
                  <option value="DISCO DURO USB 3 de 3 Teras">DISCO DURO USB 3 de 3 Teras</option>
                  <option value="Dispositivo móvil tipo tablet">Dispositivo móvil tipo tablet</option>
                  <option value="ESCANER">ESCANER</option>
                  <option value="FOTOCOPIADORA">FOTOCOPIADORA</option>
                  <option value="GENERADOR ELECTRICO">GENERADOR ELECTRICO</option>
                  <option value="HD Pro Webcam">HD Pro Webcam</option>
                  <option value="HDMI Switcher">HDMI Switcher</option>
                  <option value="Impresora">Impresora</option>
                  <option value="Ipad 32 GB">Ipad 32 GB</option>
                  <option value="Lcd proyector EPSON">Lcd proyector EPSON</option>
                  <option value="LifeCam Studio for business ">LifeCam Studio for business </option>
                  <option value="Memoria USB 32GB">Memoria USB 32GB</option>
                  <option value="Mesa Graduable">Mesa Graduable</option>
                  <option value="Mesa graduable Surtinova">Mesa graduable Surtinova</option>
                  <option value="MICROFONO">MICROFONO</option>
                  <option value="MINI SPLIT">MINI SPLIT</option>
                  <option value="MODEM">MODEM</option>
                  <option value="Modem WiFi Movistar IMEI: 865113020556994">Modem WiFi Movistar IMEI: 865113020556994</option>
                  <option value="Modem WiFi Tigo">Modem WiFi Tigo</option>
                  <option value="Moden mobile Wifi">Moden mobile Wifi</option>
                  <option value="Moden mobile Wifi">Moden mobile Wifi</option>
                  <option value="MONITOR">MONITOR</option>
                  <option value="PISTOLA">PISTOLA</option>
                  <option value="PLANTA TELEFONICA">PLANTA TELEFONICA</option>
                  <option value="POINTER">POINTER</option>
                  <option value="SERVIDOR">SERVIDOR</option>
                  <option value="SPEAKERPHONE">SPEAKERPHONE</option>
                  <option value="SWICHT">SWICHT</option>
                  <option value="Switch HDMI 5x1">Switch HDMI 5x1</option>
                  <option value="SWITCH KVM">SWITCH KVM</option>
                  <option value="Tableta">Tableta</option>
                  <option value="TELEFONO">TELEFONO</option>
                  <option value="TELEFONO CONFERENCIA">TELEFONO CONFERENCIA</option>
                  <option value="TELEFONO DIGITAL">TELEFONO DIGITAL</option>
                  <option value="TELEFONO IP">TELEFONO IP</option>
                  <option value="TELEFONO MANOS LIBRES">TELEFONO MANOS LIBRES</option>
                  <option value="Teléfono SIP DeskPhone Entry-leve">Teléfono SIP DeskPhone Entry-leve</option>
                  <option value="Televisor  LG 65 pulgadas">Televisor  LG 65 pulgadas</option>
                  <option value="Televisor Samsung 55 pulgadas">Televisor Samsung 55 pulgadas</option>
                  <option value="USB-3.0 4Puerto">USB-3.0 4Puerto</option>
                  <option value="Video Beam">Video Beam</option>
                  <option value="Swtich">Swtich</option>
                  <option value="Guaya">Guaya</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                  <h3>Fabricante</h3>
                    <input type="text" class="form-control" placeholder="Fabricante" autofocus name="fabricante" required>
              </div> 
              <div class="form-group col-md-6">
                <h3>Producto</h3>
                  <input type="text" class="form-control" placeholder="Nombre Producto" autofocus name="nombre_p" required>
              </div>
              <div class="form-group col-md-6">
                  <h3>Modelo</h3>
                    <input type="text" class="form-control" placeholder="Modelo" autofocus name="modelo" required>
              </div>
              <div class="form-group col-md-6">
                  <h3>Numero de parte</h3>
                    <input type="text" class="form-control" placeholder="# de parte" autofocus name="num_parte" required>
              </div>              
             </div>
              <button type="submit" class="col btn btn-success" name="guardarproducto" value="guardarproducto">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--Activos Modal -->
<div class="modal fade" id="activosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Agregar Datos</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-body">
      <form method="POST" autocomplete="off" name="ingresosForm"> 
      <div class="form-row">
        <div class="form-group col-md-6">
          <h3>País</h3>
          <select name="pais" id="pais">
            <option>--Selecione una opción--</option>
            <option value="Colombia">Colombia</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Panamá">Panamá</option>
          </select>
        </div>
         <div class="form-group col-md-6">
          <h3>Serie</h3>
          <input type="text" class="form-control" placeholder="Serie" autofocus name="serie">
        </div>  
        
        <div class="form-group col-md-6">
          <h3>Categoria</h3>
            <select name="categoria_activo" id="categoria_activo" class="categoria_activo">
              <option value="">--Seleccione una opción--</option>
              <?php
                $select_categoria = $con->query ("SELECT DISTINCT categoria_prod FROM productos ORDER BY categoria_prod");
                while($rows = $select_categoria->fetch_assoc())
                {
                  $categoria = $rows['categoria_prod'];

                
                 echo "<option value='$categoria'>$categoria</option>";
                }
              ?>
            </select>
        </div>  
        <div class="form-group col-md-6">
          <h3>Producto</h3>
          <select name="selectProduct" id="selectProduct">
            
          </select>
        </div> 
        <br>
       
         <div class="form-group col-md-6">
            <h3>Placa inventario</h3>
              <input type="text" class="form-control" placeholder="Placa Inventario" autofocus name="placa_inventario">
        </div>
        <div class="form-group col-md-6">
          <h3>Fecha de compra</h3>
            <input type="date" class="form-control" placeholder="Fecha de compra" autofocus name="fecha_compra" required>
        </div>
        <div class="form-group col-md-6">
          <h3>Vencimiento de garantia</h3>
            <input type="date" class="form-control" placeholder="vencimiento garantia" autofocus name="ven_garantia">
        </div>
          <div class="from-group col-md-6">
          <h3>Moneda</h3>
            <select name="moneda" id="moneda">
              <option>--Selecione una opción--</option>
              <option value="Pesos">Pesos</option>
              <option value="Dolares">Dolares</option>
            </select>
        </div>
        <div class="form-group col-md-6">
          <h3>Valor</h3>
           <input type="text" class="form-control" placeholder="Valor" autofocus name="valor" required>
        </div>
        <div class="form-group col-md-6">
          <h3>Provedor</h3>
           <input type="text" class="form-control" placeholder="Provedor" autofocus name="provedor" required>
        </div>
        <div class="form-group col-md-6">
          <h3>Numero de factura</h3>
            <input type="text" class="form-control" placeholder="Numero de Factura" autofocus name="num_factura" required>
        </div>
        </div>
          <div class="form-group col">
            <input type="submit" class="btn btn-success btn-block" name="guardaractivo" value="guardar" onclick="return Onguardaringreso();">
          </div>
        <div class="form-group ">
          <button type="submit" class="col btn btn-success" name="guardarActivoAsig" value="guardar" onclick="return OnguardaringresoAsig();">Guardar y asignar</button>
        </div>

          <script language="Javascript">
              function OnguardaringresoAsig()
            {
              document.ingresosForm.action = "asignacionesmodal.php"
              document.ingresosForm.target = "";
              document.ingresosForm.submit();
              return true;
            }

            function Onguardaringreso()
            {
              document.ingresosForm.action = "saveactivos.php"
              document.ingresosForm.target = "";
              document.ingresosForm.submit();
              return true;
            }
          </script>
      </form>
    </div>
  </div>
      </div>
    </div>
  </div>

<!-- Asignaciones modal -->
<div class="modal fade" id="asignacionesmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Agregar Datos</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="card card-body">
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
                        <option value="">--Seleccione una opción--</option>
                        <?php
                         $select_categoria = $con->query ("SELECT DISTINCT categoria FROM activos WHERE estado = 'Disponible' ORDER BY categoria");
                            while($rows = $select_categoria->fetch_assoc())
                            {
                              $categoria = $rows['categoria'];
                            
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
          </div>
        </div>
      </div>

<!-- Devoluciones modal -->
<div class="modal fade" id="devolucionesmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Agregar devoluciones</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-body">
      <form action="savedevoluciones.php" method="POST">
          
          <div class="form-group">
                  <legend>Selecione fecha</legend>
                  <input type="date" name="fecha_dev[]" required>
              </div>
                  <hr>
                    <div class="form-group">
                        <legend>Seleccionar usuario</legend>
                          <select name="usuariosD[]" id="usuariosD" class="usuariosD">
                          <?php
                            $select_query = $con->query ("SELECT DISTINCT correo FROM asignaciones ORDER BY correo");

                            while($rows = $select_query->fetch_assoc())
                            {
                              $correo = $rows['correo'];
                          
                             echo "<option value='$correo'>$correo</option>";
                            }
                          ?>
                        </select>             
                      </div>
                      <hr>
                        <div class="form-group">
                          <legend>Producto</legend>
                         <table class="table table-boardered" name="selectProductDev[]" id="selectProductDev">
                           


                          </table>

                        </div> 
                    <div class="form-group">
                      <legend>Observaciones</legend>
                        <textarea name="ObservacionesDev[]"  class="form-control" required></textarea>
                  </div>
                  <hr> 
                <div> 
          <input type="submit" class="btn btn-success" name="guardar_dev" value="guardar devolución"> 
        </div>      
      </form>
    </div>
      </div>
    </div>
  </div>
</div>
<!--Novedades modal -->
<div class="modal fade" id="bajasmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Agregar datos</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-body">
         <div class="form-group">
          <legend>Seleccione producto</legend>
          <select id="categoria_bajas">
            <option value="">--Seleccione una opción--</option>
            <?php
              $filtrarCategoria = $con->query ("SELECT DISTINCT categoria FROM activos ORDER BY categoria");

              while($rows = $filtrarCategoria->fetch_assoc())
                        {
                          $categoria = $rows['categoria'];
                      
                         echo "<option value='$categoria'>$categoria</option>";
                        }
            ?>
          </select>
        </div>
      <form method="POST" autocomplete="none" name="novedadesForm">       
        <div class="form-group">
                
                <table class="table table-boardered" id="activo_baja" class="activo_baja" name="id_activo_baja[]">
                 
                  </table>   
              </div>
              <div class="form-group">
                  <legend>Autorizado por</legend>
                    <select name="autorizado_p[]" id="autorizado_p">
                      <option>Mauricio Gutierrez</option>
                    </select>
              </div>
             <div class="form-group">
                  <legend>Motivo</legend>
                    <textarea name="motivo[]" rows="2" class="form-control" required></textarea>
              </div>
              <div class="form-group">
                  <legend>Observaciones</legend>
                    <textarea name="obs_bajas[]" rows="2" class="form-control" required></textarea>
              </div>
              <div class="form-group">
                  <h3>Tipo de novedad</h3>
                  <select name="tiponovedad[]" id="tiponovedad">
                    <option>--Seleccione una opción--</option>
                    <option value="Dañado">Dañado</option>
                    <option value="En_reparacion">En reparación</option>
                    <option value="De_baja">De baja</option>
                  </select>                  
              </div>

              <div class="damaged" id="damaged">
                <div class="form-group" id="Dañado">
                  <input type="submit" id="guardardamaged" class="btn btn-success btn-block" name="guardardamaged" value="Guardar activo dañado" onclick="return guardarDamaged();">
                </div>
              </div>

              <div class="reparacion" id="reparacion">
                  <div class="form-group col" id="En_reparacion">
                    <input type="submit" id="guardarreparacion" class="btn btn-success btn-block" name="guardarreparacion" value="Generar reparacion" onclick="return guardarReparacion();">
                  </div>
              </div>
              
        <input type="submit" class="btn btn-success btn-block" name="guardar_baja" value="guardar" onclick = "return guardarBaja();">

        <script type="text/javascript">
          function guardarDamaged()
          {
            document.novedadesForm.action = "activosdañados.php"
            document.novedadesForm.target = "";
            document.novedadesForm.submit();
            return true; 
          }

          function guardarReparacion()
          {
            document.novedadesForm.action = "generarreparacion.php"
            document.novedadesForm.target = "";
            document.novedadesForm.submit();
            return true;            
          }

          function guardarBaja()
          {
            document.novedadesForm.action = "savebajas.php"
            document.novedadesForm.target = "";
            document.novedadesForm.submit();
            return true;
          }
        </script>
      </form>
    </div>
  </div>
      </div>
    </div>
  </div>
</div> 

<!--Reparaciones modal-->
    <div class="modal fade" id="verreparacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Activos en reparación</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <div class="card card-body">
            <form action="activosreparados.php" method="POST">
              <div class="form-group">
                <h3>Producto</h3>
                  <table class="table table-boardered" name="activoEnReparacion[]">
                    <thead>
                      <tr class="bg-warning">
                        <th>Tipo</th>
                        <th>Modelo</th>
                        <th>Serie</th>
                        <th>Placa</th>
                        <th>Seleccionar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          $select_query = $con->query ("SELECT * FROM activos INNER JOIN productos ON activos.id_prod = productos.id_prod WHERE estado = 'Reparación'");
                          while($rows = $select_query->fetch_assoc()) { ?>
                          <tr>
                             <td><?php echo $rows ["categoria"] ?></td>
                              <td><?php echo $rows ["modelo"] ?></td>
                              <td><?php echo $rows ["serie"] ?></td>
                              <td><?php echo $rows ["placa_inventario"] ?></td>
                              <td><input type="checkbox" name="activoEnReparacion[]" value= "<?php echo $rows['id_activo'] ?>"></td>
                          </tr>
                          <?php } ?>
                    </tbody>    
                  </table>
              </div>       

                <input type="submit" id="activoReparado" class="btn btn-success" value="Declarar como reparado" name="activoReparado"> 

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
<?php include("includes/footer.php")?>