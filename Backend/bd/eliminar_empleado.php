<?php
	include("conexion.php");
	$id = $_GET['no'];
	$slq="DELETE FROM empleados WHERE Clave_empleado = '$id'";
		$consulta = mysqli_query($conexion, $slq);
		if ($consulta == FALSE) {
			echo "<script type='text/javascript'> alert('Error en Eliminacion');
					window.location.href='../../Frontend/Empleados.php';					
					</script>";
		}
		else{
			
			echo "<script type='text/javascript'> alert('Eliminacion Exitosa');
					window.location.href='../../Frontend/Empleados.php';					
					</script>";
		}
?>