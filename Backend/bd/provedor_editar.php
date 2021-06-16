<?php  
	include ("conexion.php");
	$id = $_GET['no'];
	$sql="SELECT * FROM provedor WHERE id_provedor = '$id'";
	$resultado=$conexion->query($sql);
 	$mostrar=$resultado->fetch_assoc();
?>