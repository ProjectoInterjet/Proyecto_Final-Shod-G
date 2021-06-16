<?php require_once "vistas/parte_superior.php"?>
<?php include '../Backend/bd/producto_editar.php' ?>
	<div class="container">
		<h1 class="text-center">Actualizar Producto</h1>
		<br>
		<form action="../Backend/bd/producto_editar_agregar.php" method="POST">
			<div class="form-group">
		    <label for="inputAddress2">Codigo</label>
		    <input type="hidden" class="form-control" name="id" value="<?php echo $mostrar['id']; ?>">
		    <input type="number" class="form-control" name="cod" readonly="" value="<?php echo $mostrar['codigo']; ?>">
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Nombre</label>
		      <input type="text" class="form-control" name="nom" value="<?php echo $mostrar['descripcion']; ?>" >
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Precio de venta</label>
		      <input type="number" class="form-control" name="precioV" value="<?php echo $mostrar['precioVenta']; ?>">
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Precio de compra</label>
		      <input type="number" class="form-control" name="precioC" value="<?php echo $mostrar['precioCompra']; ?>" >
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Stock</label>
		      <input type="number" class="form-control" name="stock" value="<?php echo $mostrar['existencia']; ?>">
		    </div>
		  </div>
		  <div class="form-group">
		      <label for="inputPassword4">Color</label>
		      <input type="text" class="form-control" name="color" value="<?php echo $mostrar['color']; ?>">
		   </div>
		  	<div class="form-group">
		      	<label for="inputAddress">Descripcion</label>
		      	<textarea class="form-control" name="descri" ><?php echo $mostrar['descripcion_prod']; ?></textarea>
		    </div>
		
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Talla</label>
		      <input type="number" class="form-control" name="talla" value="<?php echo $mostrar['talla']; ?>">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Fecha de entrada</label>
		      <input type="date" class="form-control" name="fecha" value="<?php echo $mostrar['fecha_entrada']; ?>">
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar</button>
		</form>
		
	</div>
<?php require_once "vistas/parte_inferior.php"?>