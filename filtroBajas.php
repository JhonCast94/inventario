<?php
include("db.php");

$categoria = $_POST['filtroBaja'];

$output = ' <thead>
              <tr class="bg-warning">
                <th>Tipo</th>
                <th>Modelo</th>
                <th>Serie</th>
                <th>Placa</th>
                <th>Seleccionar</th>
              </tr>
            </thead>';

$sql = "SELECT * FROM activos INNER JOIN productos ON activos.id_prod = productos.id_prod WHERE categoria = '$categoria'";
$resultado = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($resultado)) 
{
	if ($row["estado"] == 'Disponible' ) {
		
	$output .= '<tbody>
                  <tr>
                    <td>'.$row["categoria"].'</td>
                    <td>'.$row["id_activo"].'</td>
                    <td>'.$row["serie"].'</td>
                    <td>'.$row["placa_inventario"].'</td>
                    <td><input type="checkbox" name="id_activo_baja[]" value="'.$row["id_activo"].'"></td>
                  </tr>
                </tbody>';
    }            	
}
echo $output;
?>