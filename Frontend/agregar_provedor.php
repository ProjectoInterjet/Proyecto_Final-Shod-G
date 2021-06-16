<?php require_once "vistas/parte_superior.php"?>
	<div class="container">
		<h1 class="text-center">Agregar Provedor </h1>
		<br>
		<form method="POST" action="../Backend/bd/agregar_provedor.php" >
		  <div class="row">
		    <div class="col">
		    	<label for="formGroupExampleInput">Nombre del provedor</label>
		     	<input type="text" class="form-control" name="nombre" placeholder="Nombre">
		    </div>
		    <div class="col">
		    	<label for="formGroupExampleInput">Direccion del provedor</label>
		      	<input type="text" class="form-control" name="dir" placeholder="Direccion">
		    </div>
		  </div>
		  <br>
		  <div class="row">
		    <div class="col">
		    	<label for="formGroupExampleInput">Telefono</label>
		     	<input type="text" class="form-control" name="tell" placeholder="Telefono del provedor">
		    </div>
		    <div class="col">
		    	<label for="formGroupExampleInput">Marca</label>
		      	<input type="text" class="form-control" name="marca" placeholder="Marca del producto">
		    </div>

		  </div>
		  <br>
		  <br>

		  <div class="row">
		  	<div class="col">		  		
		  		<button id="btn1" type="Submit" class="btn btn-primary btn-lg btn-block">Agregar</button>  	
		  	</div>
		  </div>
		</form>
		
	</div>
<?php require_once "vistas/parte_inferior.php"?>