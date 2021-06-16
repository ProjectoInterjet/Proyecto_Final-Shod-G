<?php
	include("conexion.php");
	$id = $_GET['no'];
	$slq="DELETE FROM provedor WHERE id_provedor = '$id'";
		$consulta = mysqli_query($conexion, $slq);
		if ($consulta == FALSE) {
			echo "<script type='text/javascript'> alert('Error en la eliminacion');
					window.location.href='../../Frontend/Provedor.php';					
					</script>";
		}
		else{
			echo "<script type='text/javascript'> alert('Eliminacion Exitosa');
					window.location.href='../../Frontend/Provedor.php';					
					</script>";
		}
		
?>