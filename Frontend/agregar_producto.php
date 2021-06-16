<?php require_once "vistas/parte_superior.php"?>
<?php include '../Backend/bd/mostrarDatos.php' ?>
	<div class="container">
		<h1 class="text-center">Agregar Producto</h1>
		<br>
		
		<form action="../Backend/bd/agregar_productos.php" method="POST">
			<div class="form-group">
		    <label for="inputAddress2">Codigo</label>
		    <input type="number" class="form-control" name="cod" placeholder="Nombre del producto" readonly="" value='<?php echo mt_rand(1, 10000000); ?>'>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Nombre</label>
		      <input type="text" class="form-control" name="nom" placeholder="Nombre del producto">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Precio de venta</label>
		      <input type="number" class="form-control" name="precioV" placeholder="Precio de venta al publico">
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Precio de compra</label>
		      <input type="number" class="form-control" name="precioC" placeholder="Precio de compra">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Stock</label>
		      <input type="number" class="form-control" name="stock" placeholder="Cantidad de productos">
		    </div>
		  </div>
		  <div class="form-group">
		      <label for="inputPassword4">Color</label>
		      <input type="text" class="form-control" name="color" placeholder="Color del calzado">
		   </div>
		  	<div class="form-group">
		      	<label for="inputAddress">Descripcion</label>
		      	<textarea class="form-control" name="descri" placeholder="Descripcion del producto"></textarea>
		    </div>
		
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Talla</label>
		      <input type="number" class="form-control" name="talla" placeholder="Precio de compra">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Fecha de entrada</label>
		      <input type="date" class="form-control" name="fecha" placeholder="Cantidad de productos">
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar</button>
		</form>
		
	</div>
<?php require_once "vistas/parte_inferior.php"?>