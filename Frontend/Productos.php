<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Detalles de los Productos</h1>   
 <?php
    include '../Backend/bd/mostrarDatos.php';
    ?>  
<div class="container">
        <div class="row">
                 <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio de venta</th>
                                <th>Precio de compra</th>
                                <th>Stock</th>
                                <th>Color</th>
                                <th>Talla</th>
                                <th>Fecha de entrada</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                 <?php   foreach ($query2 as $mostrar) { ?>
                                <tr>
                                    <td><?php echo $mostrar['id']; ?></td>
                                    <td><?php echo $mostrar['codigo']; ?></td>
                                    <td><?php echo $mostrar['descripcion']; ?></td>
                                    <td><?php echo $mostrar['descripcion_prod']; ?></td>
                                    <td><?php echo $mostrar['precioVenta']; ?></td>
                                    <td><?php echo $mostrar['precioCompra']; ?></td>
                                    <td><?php echo $mostrar['existencia']; ?></td>
                                    <td><?php echo $mostrar['color']; ?></td>
                                    <td><?php echo $mostrar['talla']; ?></td>
                                    <td><?php echo $mostrar['fecha_entrada']; ?></td>
                                    <?php echo "<td style='text-decoration: none;'> <center><a href='../Backend/bd/eliminar_producto.php?no=".$mostrar['id']."''><button type='button' class='btn btn-danger'><i class='fa fa-trash'></i></button></a> 

                                        <a href='Productos_editar.php?no=".$mostrar['id']."''><button type='button' class='btn btn-success'><i class='fa fa-edit'></i></button></a></center> </td>"; ?>
                                </tr>
                                <?php } ?>
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>    
      
</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>