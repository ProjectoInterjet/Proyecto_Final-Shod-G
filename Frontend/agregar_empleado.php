<?php require_once "vistas/parte_superior.php"?>
	<div class="container">
		<h1 class="text-center">Agregar Empleado</h1>
		<br>
		
		<form action="../Backend/bd/agregar_empleados.php" method="POST">
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Nombre</label>
		      <input type="text" class="form-control" name="nom" placeholder="Nombre del empleado">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Apellidos</label>
		      <input type="text" class="form-control" name="ape" placeholder="Apellido del empleado">
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Nombre de usuario</label>
		      <input type="email" class="form-control" name="mail" placeholder="Usuario con el que se desea acceder">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Contraseña</label>
		      <input type="password" class="form-control" name="con" placeholder="Nombre o correo electronico">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress">Direccion</label>
		    <input type="text" class="form-control" name="dir" placeholder="Direccion del empleado">
		  </div>
		  <div class="form-group">
		    <label for="inputAddress2">Sueldo</label>
		    <input type="text" class="form-control" name="suel" placeholder="Sueldo del empleado">
		  </div>
		  <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar</button>
		</form>
		
	</div>
<?php require_once "vistas/parte_inferior.php"?>