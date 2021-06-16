<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Detalles del Provedor</h1> 
 <?php
    include '../Backend/bd/mostrarDatos.php';
 ?>
<br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Marca</th>
                                <th>Opcion</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                                 <?php   foreach ($query as $mostrar){ ?>
                                <tr>
                                    <td><?php echo $mostrar['id_provedor']; ?></td>
                                    <td><?php echo $mostrar['nombre']; ?></td>
                                    <td><?php echo $mostrar['direccion']; ?></td>
                                    <td><?php echo $mostrar['Telefono']; ?></td>
                                    <td><?php echo $mostrar['marca']; ?></td>
                                   <!--<td><a href="index.php"><button type="button" class="btn btn-success">Editar</button></a>
                                    <a href="index.php"><button type="button" class="btn btn-danger">Eliminar</button></a></td>-->
                                   
                                    <?php echo "<td> <center><a href='../Backend/bd/eliminar_provedor.php?no=".$mostrar['id_provedor']."''><button type='button' class='btn btn-danger'><i class='fa fa-trash'></i></button></a> 

                                        <a href='../Provedor_editar.php?no=".$mostrar['id_provedor']."''><button type='button' class='btn btn-success'><i class='fa fa-edit'></i></button></a> </center></td>"; ?>

                                  
                                </tr>
                                <?php } ?>
                        </tbody>        
                       </table>                    
                    </div>
                </div>
            </div>  
        </div>         
<!--Modal para CRUD-->  
</div>
<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>