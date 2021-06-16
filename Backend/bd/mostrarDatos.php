<?php 
	include ("conexion.php");
	$sql="SELECT * FROM provedor";
	$query = mysqli_query($conexion, $sql);
	$array = mysqli_fetch_array($query);


	$sql1="SELECT * FROM empleados";
	$query1 = mysqli_query($conexion, $sql1);
	$array1 = mysqli_fetch_array($query1);

	$sql2="SELECT * FROM productos";
	$query2 = mysqli_query($conexion, $sql2);
	$array2 = mysqli_fetch_array($query2);
 ?>
