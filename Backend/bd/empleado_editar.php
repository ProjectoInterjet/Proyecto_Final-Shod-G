<?php  
	include ("conexion.php");
	$id = $_GET['no'];
	$sql="SELECT * FROM empleados WHERE Clave_empleado = '$id'";
	$resultado=$conexion->query($sql);
 	$mostrar=$resultado->fetch_assoc();
?>