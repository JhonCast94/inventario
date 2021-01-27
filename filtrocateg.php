<?php 
include("db.php");

$filtroProd = $_POST['filtroProd'];

$output = '';

$sql = "SELECT * FROM productos WHERE categoria_prod ='$filtroProd'";

$resultado = mysqli_query($con, $sql);

$output = '<option value="">--Seleccione producto--</option>';
while ($row = mysqli_fetch_array($resultado)) 
{
	$output .= '<option value="'.$row["id_prod"].'">'.$row["producto"].'</option>';	
}

echo $output;



?>