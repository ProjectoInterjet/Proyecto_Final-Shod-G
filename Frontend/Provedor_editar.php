<?php require_once "vistas/parte_superior.php"?>
<?php include '../Backend/bd/provedor_editar.php' ?>
    <div class="container">
        <h1 class="text-center">Editar Provedor</h1>
        <br>
        <form method="POST" action="../Backend/bd/provedor_editar_agregar.php" >
          <div class="row">
          
                <input type="hidden"  name="id"  value="<?php echo $mostrar['id_provedor']; ?>" >
            
            <div class="col">
                <label for="formGroupExampleInput">Nombre del provedor</label>
                <input type="text" class="form-control" name="nombre"  value="<?php echo $mostrar['nombre']; ?>" >
            </div>
            <div class="col">
                <label for="formGroupExampleInput">Direccion del provedor</label>
                <input type="text" class="form-control" name="dir"  value="<?php echo $mostrar['direccion']; ?>">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col">
                <label for="formGroupExampleInput">Telefono</label>
                <input type="text" class="form-control" name="tell"  value="<?php echo $mostrar['Telefono']; ?>">
            </div>
            <div class="col">
                <label for="formGroupExampleInput">Marca</label>
                <input type="text" class="form-control" name="marca" value="<?php echo $mostrar['marca']; ?>">
            </div>

          </div>
          <br>
          <br>

          <div class="row">
            <div class="col">               
                <button id="btn1" type="Submit" class="btn btn-primary btn-lg btn-block">Actualizar</button>   
            </div>
          </div>
        </form>
        
    </div>
<?php require_once "vistas/parte_inferior.php"?>