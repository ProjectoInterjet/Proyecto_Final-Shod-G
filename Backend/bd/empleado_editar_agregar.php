<?php
	include ("conexion.php");
	$id = $_POST ['id'];
	$nombre = $_POST ['nom'];
	$apelli = $_POST ['ape'];
	$dir = $_POST ['dir'];
	$sueldo = $_POST ['suel'];
	$mail = $_POST ['mail'];
	$contra = $_POST ['con'];
	
	$sql = "UPDATE empleados SET Nombre_em='$nombre', Apellidos='$apelli', Direccion_em='$dir', Sueldo_em='$sueldo', Nombre_Usuario='$mail', Contrasena='$contra' WHERE Clave_empleado='$id'";

		$consulta = mysqli_query($conexion, $sql);

		if ($consulta == False) {
			echo "<script type='text/javascript'> alert('ERROR AL ACTUALIZAR');
					window.location.href='../../Frontend/Empleados.php';					
					</script>";
		}
		else{
			echo "<script type='text/javascript'> alert('EXITO AL ACTUALIZAR');
					window.location.href='../../Frontend/Empleados.php';					
					</script>";
		}

		mysqli_close($conexion);
/*
	

		$sentencia = $base_de_datos->prepare("UPDATE empleados SET Nombre_em = ?, Apellidos= ?, Direccion_emv = ?, Sueldo_em = ?, Nombre_Usuario = ?, Contrasena = ? WHERE Clave_empleado = ?;");
		$resultado = $sentencia->execute([$nombre, $apelli, $dir, $sueldo ,$mail ,$contra ,$id]);

		if($resultado === TRUE){
			header("Location: ../Empleados.php");
			exit;
		}
		else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";*/
?>
	