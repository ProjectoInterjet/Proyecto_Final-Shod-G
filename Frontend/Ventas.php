<?php require_once "vistas/parte_superior.php"?>
<?php
include_once "../Backend/bd/conexion2.php";
$sentencia = $base_de_datos->query("SELECT ventas.total, ventas.fecha, ventas.id, GROUP_CONCAT( productos.codigo, '..',  productos.descripcion, '..', productos_vendidos.cantidad SEPARATOR '__') AS productos FROM ventas INNER JOIN productos_vendidos ON productos_vendidos.id_venta = ventas.id INNER JOIN productos ON productos.id = productos_vendidos.id_producto GROUP BY ventas.id ORDER BY ventas.id;");
$ventas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!--INICIO del cont principal-->
<div class="container">
        <h1>Reporte de ventas</h1>
        <br>
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead class="text-center">
                <tr>
                    <th>Número</th>
                    <th>Fecha</th>
                    <th>Productos vendidos</th>
                    <th>Total</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($ventas as $venta){ ?>
                <tr>
                    <td><?php echo $venta->id ?></td>
                    <td><?php echo $venta->fecha ?></td>
                    <td>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre Producto</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach(explode("__", $venta->productos) as $productosConcatenados){ 
                                $producto = explode("..", $productosConcatenados)
                                ?>
                                <tr>
                                    <td><?php echo $producto[0] ?></td>
                                    <td><?php echo $producto[1] ?></td>
                                    <td><?php echo $producto[2] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </td>
                    <td><?php echo $venta->total ?></td>
                    <td><a class="btn btn-danger" href="<?php echo "eliminarVentas.php?id=" . $venta->id?>"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>
      
<!--Modal para CRUD-->
</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>

