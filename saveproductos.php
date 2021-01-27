<?php 
include("db.php");

 $queryjoin = mysqli_query($con,"SELECT id_prod FROM productos INNER JOIN activos ON productos.id_prod = activos.id_prod");

if (isset($_POST['guardarproducto'])) {
	$categoria = $_POST['categoria_prod'];
	$fabricante = $_POST['fabricante'];
	$producto = $_POST['nombre_p'];
	$modelo = $_POST['modelo'];
	$num_parte = $_POST['num_parte'];
	

	$queryP = "INSERT INTO productos (categoria_prod, fabricante, producto, modelo, numero_de_parte) VALUES ('$categoria', '$fabricante', '$producto', '$modelo', '$num_parte')";


	$resultadoP = mysqli_query($con, $queryP);
	if (!$resultadoP) {
		die("Query fallido");
	}

	$_SESSION['message'] = 'Guardado Exitosamente';
	$_SESSION['message_type'] = 'success';
	header("Location: main.php");

}
?>