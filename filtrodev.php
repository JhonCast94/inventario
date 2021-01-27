<?php 
include("db.php");

$filtrodev = $_POST['filtrodev'];

$output = ' <thead>
              <tr class="bg-warning">
                <th>Tipo</th>
                <th>Modelo</th>
                <th>Serie</th>
                <th>Placa</th>
                <th>Seleccionar</th>
              </tr>
            </thead>';

$sql = "SELECT * FROM activos INNER JOIN asignaciones ON activos.id_activo = asignaciones.id_activo INNER JOIN productos ON activos.id_prod = productos.id_prod WHERE correo = '$filtrodev'";

$resultado = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($resultado)) 
{
	if ($row["estado"] == 'Asignado' ) {
			
	$output .= '
				 <tbody>
                  <tr>
                    <td>'.$row["categoria"].'</td>
                    <td>'.$row["modelo"].'</td>
                    <td>'.$row["serie"].'</td>
                    <td>'.$row["placa_inventario"].'</td>
                    <td><input type="checkbox" name="selectProductDev[]" value="'.$row["id_activo"].'"></td>
                  </tr>
                </tbody>';
	} 
}

echo $output;

?>