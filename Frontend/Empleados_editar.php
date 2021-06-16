<?php require_once "vistas/parte_superior.php"?>
<?php include '../Backend/bd/empleado_editar.php' ?>
	<div class="container">
		<h1 class="text-center">Editar Empleado</h1>
		<br>
		
		<form action="../Backend/bd/empleado_editar_agregar.php" method="POST">
		  <div class="form-row">

		  	  <input type="hidden" name="id" value="<?php echo $mostrar['Clave_empleado']; ?>" >


		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Nombre</label>
		      <input type="text" class="form-control" name="nom" value="<?php echo $mostrar['Nombre_em']; ?>">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Apellidos</label>
		      <input type="text" class="form-control" name="ape" value="<?php echo $mostrar['Apellidos']; ?>">
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Nombre de usuario</label>
		      <input type="email" class="form-control" name="mail" value="<?php echo $mostrar['Nombre_Usuario']; ?>">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Contraseña</label>
		      <input type="text" class="form-control" name="con" value="<?php echo $mostrar['Contrasena']; ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress">Direccion</label>
		    <input type="text" class="form-control" name="dir" value="<?php echo $mostrar['Direccion_em']; ?>">
		  </div>
		  <div class="form-group">
		    <label for="inputAddress2">Sueldo</label>
		    <input type="text" class="form-control" name="suel" value="<?php echo $mostrar['Sueldo_em']; ?>">
		  </div>
		  <button type="submit" id="btn1" class="btn btn-primary btn-lg btn-block">Actualizar</button>
		</form>
		
	</div>
<?php require_once "vistas/parte_inferior.php"?>