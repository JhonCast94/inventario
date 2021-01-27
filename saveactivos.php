<?php
include("db.php");

 $queryjoin = mysqli_query($con,"SELECT id_prod FROM productos INNER JOIN activos ON productos.id_prod = activos.id_prod");

if (isset($_POST['guardaractivo'])){
	$estadoprod = 'Disponible';
	$pais = $_POST['pais'];
	$serie = $_POST['serie'];
	$categoria = $_POST['categoria_activo'];
	$id_prod = $_POST['selectProduct'];
	$placa_inventario = $_POST['placa_inventario'];
	$fecha_compra = $_POST['fecha_compra'];
	$ven_garantia = $_POST['ven_garantia'];
	$moneda = $_POST['moneda'];
	$valor = $_POST['valor'];
	$provedor = $_POST['provedor'];
	$num_factura = $_POST['num_factura'];

	$queryA = "INSERT INTO activos (estado, pais, serie, categoria, id_prod, placa_inventario, fecha_compra, ven_garantia, moneda, valor, provedor, num_factura) VALUES ('$estadoprod','$pais','$serie','$categoria','$id_prod','$placa_inventario','$fecha_compra','$ven_garantia','$moneda','$valor','$provedor','$num_factura')";


	$resultadoA = mysqli_query($con, $queryA);		
	if(!$resultadoA){
		die("Query fallido");
	} 

	$_SESSION['message'] = 'Guardado Exitosamente';
	$_SESSION['message_type'] = 'success';
	header("Location: main.php");
	}
	
?>