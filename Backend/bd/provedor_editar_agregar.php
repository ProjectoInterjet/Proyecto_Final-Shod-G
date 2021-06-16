<?php
	include ("conexion.php");
	$id = $_POST['id'];
	$nombre = $_POST ['nombre'];
	$direccion = $_POST ['dir'];
	$tell = $_POST ['tell'];
	$marca = $_POST ['marca'];

	$sql = "UPDATE provedor SET nombre='$nombre', direccion='$direccion', Telefono='$tell', marca='$marca' WHERE id_provedor = '$id'";

		$consulta = mysqli_query($conexion, $sql);

		if ($consulta == FALSE) {
			echo "<script type='text/javascript'> alert('Error al actualizar');
					window.location.href='../../Frontend/Provedor.php';					
					</script>";
		}
		else{
			echo "<script type='text/javascript'> alert('Actualizado con exito');
					window.location.href='../../Frontend/Provedor.php';					
					</script>";
		}
		mysqli_close($conexion);
?>