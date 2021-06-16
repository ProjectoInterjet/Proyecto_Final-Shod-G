<?php 
	include 'conexion.php';
	$codigo = $_POST['cod'];
	$nombre = $_POST ['nom'];
	$precioV = $_POST ['precioV'];
	$precioC = $_POST ['precioC'];
	$stock = $_POST ['stock'];
	$color = $_POST ['color'];
	$descri = $_POST ['descri'];
	$talla = $_POST ['talla'];
	$fecha = $_POST ['fecha'];
	$prove = $_POST ['opc'];	

    $sql = "INSERT INTO productos (codigo, descripcion, precioVenta, precioCompra, existencia, 	descripcion_prod, color, talla, fecha_entrada) VALUES ('$codigo', '$nombre', '$precioV', '$precioC', '$stock', '$descri', '$color', '$talla', '$fecha')";

		$consulta = mysqli_query($conexion, $sql);

		if ($consulta == FALSE) {
			echo "<script type='text/javascript'> alert('ERROR AL AGREGAR');
					window.location.href='../../Frontend/Productos.php';					
					</script>";
		}
		else{
			echo "<script type='text/javascript'> alert('Agregado con exito');
					window.location.href='../../Frontend/Productos.php';					
					</script>";
		}
		mysqli_close($conexion);
 ?>