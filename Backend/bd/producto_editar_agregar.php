<?php
	include ("conexion.php");
	$id = $_POST['id'];
	$codigo = $_POST['cod'];
	$nombre = $_POST ['nom'];
	$precioV = $_POST ['precioV'];
	$precioC = $_POST ['precioC'];
	$stock = $_POST ['stock'];
	$color = $_POST ['color'];
	$descri = $_POST ['descri'];
	$talla = $_POST ['talla'];
	$fecha = $_POST ['fecha'];

	$sql = "UPDATE productos SET descripcion='$nombre', precioVenta='$precioV', precioCompra='$precioC', existencia='$stock', descripcion_prod='$descri', color='$color', talla='$talla', fecha_entrada='$fecha' WHERE id = '$id'";

		$consulta = mysqli_query($conexion, $sql);

		if ($consulta == FALSE) {
			echo "<script type='text/javascript'> alert('ERROR AL ACTUALIZAR');
					window.location.href='../../Frontend/Productos.php';					
					</script>";
		}
		else{
			echo "<script type='text/javascript'> alert('EXITO AL ACTUALIZAR');
					window.location.href='../../Frontend/Productos.php';					
					</script>";
		}
		mysqli_close($conexion);
?>