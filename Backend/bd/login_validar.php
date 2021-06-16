<?php
	include("conexion.php");
	session_start();
	$usuario=$_POST['correo'];
	$clave=$_POST['clave'];

	$consulta="SELECT * FROM empleados WHERE Nombre_Usuario = '$usuario' and Contrasena = '$clave'";
	$resultado=mysqli_query($conexion, $consulta);
	$filas=mysqli_num_rows($resultado);
	if ($usuario == 'admin' && $clave == 'admin') {
		$_SESSION['usuario'] = $usuario;
		header("location: ../../Frontend/index.php");

	}else if ($filas>0) {
		$_SESSION['usuario'] = $usuario;
		header("location: ../../Frontend/index_empleados.php");
		
	}else {
	    header("location: ../../Frontend/login_error.html");
	}
	mysqli_free_result($resultado);
	mysqli_close($conexion);
?>