<?php 
session_start();
include_once "vistas/parte_superior_empleado.php";
if(!isset($_SESSION["carrito"])) $_SESSION["carrito"] = [];
$granTotal = 0;
?>
<div class="container">
    <div class="col-xs-10">
         <h1>Vender Producto</h1>
        <?php
            if(isset($_GET["status"])){
                if($_GET["status"] === "1"){
                    ?>
                        <div class="alert alert-success">
                            <strong>¡Correcto!</strong> Venta realizada correctamente
                        </div>
                    <?php
                }else if($_GET["status"] === "2"){
                    ?>
                    <div class="alert alert-info">
                            <strong>Venta cancelada</strong>
                        </div>
                    <?php
                }else if($_GET["status"] === "3"){
                    ?>
                    <div class="alert alert-info">
                            <strong>Ok</strong> Producto quitado de la lista
                        </div>
                    <?php
                }else if($_GET["status"] === "4"){
                    ?>
                    <div class="alert alert-warning">
                            <strong>Error:</strong> El producto que buscas no existe
                        </div>
                    <?php
                }else if($_GET["status"] === "5"){
                    ?>
                    <div class="alert alert-danger">
                            <strong>Error: </strong>El producto está agotado
                        </div>
                    <?php
                }else{
                    ?>
                    <div class="alert alert-danger">
                            <strong>Error:</strong> Algo salió mal mientras se realizaba la venta
                        </div>
                    <?php
                }
            }
        ?>

<!--INICIO del cont principal-->

    

    <form method="POST" action="agregarAlcarrito.php">
        <label for="inputEmail4">Codigo</label><br>
          <div class="row">
            <div class="form-group col-md-10">
                
              <input type="text" class="form-control" name="codigo"  id="codigo" placeholder="Ingresar el codiogo del Producto">
            </div>
            <div class="col">
              <button type="submit" class="btn btn-success">Agregar</button>
            </div>
          </div>
    </form>
    <br>
    <table>
    <div class="row">
       <div class="col-lg-12">
             <div class="table-responsive">        
                 <table id="paf" class="table table-striped table-bordered" style="width:100%">
                    <thead class="text-center">
                    <tr>
                        <th colspan="7">Tabla de productos</th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Precio de venta</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th>Quitar</th>
                     </tr>    
                </thead>
                <tbody>
                    <?php foreach($_SESSION["carrito"] as $indice => $producto){ 
                                $granTotal += $producto->total; 
                     ?>
                    <tr>
                        <center>
                    <td><?php echo $producto->id ?></td>
                    <td><?php echo $producto->codigo ?></td>
                    <td><?php echo $producto->descripcion ?></td>
                    <td><?php echo $producto->precioVenta ?></td>
                    <td><?php echo $producto->cantidad ?></td>
                    <td><?php echo $producto->total ?></td>
                    <td><a class="btn btn-danger" href="<?php echo "../Backend/bd/eliminarDelCarrito.php?indice=" . $indice?>"><i class="fa fa-trash"></i></a></td> 
                    </center>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <h3>Total: <?php echo $granTotal; ?></h3>
            <form action="../Backend/bd/terminarVenta.php" method="POST">
            <input name="total" type="hidden" value="<?php echo $granTotal;?>">
            <button type="submit" class="btn btn-success">Terminar venta</button>
            <a href="../Backend/bd/cancelarVenta.php" class="btn btn-danger">Cancelar venta</a>
        </form>
        </div>
    </div>

</div>

</div>

</div>
<!--Modal para CRUD-->  

<!--FIN del cont principal-->
<?php require_once "vistas/ventas_abajo.php"?>