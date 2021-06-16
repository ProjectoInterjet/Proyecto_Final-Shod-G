<?php
	include ("conexion.php");
	$nombre = $_POST ['nombre'];
	$direccion = $_POST ['dir'];
	$tell = $_POST ['tell'];
	$marca = $_POST ['marca'];

		$sql = "INSERT INTO provedor VALUES ('', '$nombre', '$direccion','$tell','$marca')";

		$consulta = mysqli_query($conexion, $sql);

		if ($consulta == FALSE) {
			echo "<script type='text/javascript'> alert('Error al agregar provedor');
					window.location.href='../../Frontend/Provedor.php';					
					</script>";
		}
		else{
			echo "<script type='text/javascript'> alert('Agregado con exito');
					window.location.href='../../Frontend/Provedor.php';					
					</script>";
		}
		mysqli_close($conexion);
?>