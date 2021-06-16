<?php
	include("../Backend/bd/conexion.php");
	$id = $_GET['no'];
	$slq="DELETE FROM ventas WHERE id = '$id'";
		$consulta = mysqli_query($conexion, $slq);
		if ($consulta == FALSE) {
			echo "<script type='text/javascript'> alert('ERROR EN LA ELIMINACION');
					window.location.href='../../Frontend/Ventas.php';					
					</script>";
		}else{
			echo "<script type='text/javascript'> alert('ELIMINACION CON EXITO');
					window.location.href='../../Frontend/Ventas.php';					
					</script>";
				}
		
?>s