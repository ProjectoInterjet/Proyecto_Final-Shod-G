<?php

session_start();

unset($_SESSION["carrito"]);
$_SESSION["carrito"] = [];

header("Location: ../../Frontend/empleado_ventas.php?status=2");
?>