<?php
	$conexion=mysqli_connect('127.0.0.1','root','','ventas');
	if ($conexion) {
		print("");
	 } else{
	 	print("Conexion fallida");
	 }
 ?>