<?php  
	include ("conexion.php");
	$id = $_GET['no'];
	$sql="SELECT * FROM productos WHERE id = '$id'";
	$resultado=$conexion->query($sql);
 	$mostrar=$resultado->fetch_assoc();
?>