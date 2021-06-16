<?php 
	include 'conexion.php';
	$nombre = $_POST ['nom'];
	$apelli = $_POST ['ape'];
	$mail = $_POST ['mail'];
	$contra = $_POST ['con'];
	$dir = $_POST ['dir'];
	$sueldo = $_POST ['suel'];

    $sql = "INSERT INTO empleados (Nombre_em, Apellidos, Direccion_em, Sueldo_em, Nombre_Usuario, Contrasena) VALUES ('$nombre', '$apelli','$dir', '$sueldo','$mail', '$contra')";

		$consulta = mysqli_query($conexion, $sql);

		if ($consulta == FALSE) {
			echo "<script type='text/javascript'> alert('Error en el agregado');
					window.location.href=' ../../Frontend/Empleados.php';					
					</script>";
		}
		else{
			echo "<script type='text/javascript'> alert('Agregado con exito');
					window.location.href='../../Frontend/Empleados.php';					
					</script>";
		}
		mysqli_close($conexion);
 ?>