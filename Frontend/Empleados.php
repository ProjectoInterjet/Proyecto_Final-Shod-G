<?php require_once "vistas/parte_superior.php"?>
<?php
include_once "../Backend/bd/conexion2.php";
$sentencia = $base_de_datos->query("SELECT * FROM empleados;");
$mostrarr = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Contenido Empleados</h1>   
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
                                <th>Apellidos</th>
                                <th>Direccion</th>
                                <th>Sueldo</th>
                                <th>Correo</th>
                                <th>Contraseña</th>
                                <th>Opcion</th>
                            </tr>
                        </thead>
                        <tbody>
                                 <?php   foreach ($mostrarr as $mostrar) { ?>
                                <tr>
                                    <td><?php echo $mostrar->Clave_empleado ?></td>
                                    <td><?php echo $mostrar->Nombre_em ?></td>
                                    <td><?php echo $mostrar->Apellidos ?></td>
                                    <td><?php echo $mostrar->Direccion_em ?></td>
                                    <td><?php echo $mostrar->Sueldo_em ?></td>
                                    <td><?php echo $mostrar->Nombre_Usuario ?></td>
                                    <td><?php echo $mostrar->Contrasena ?></td>
                                    <?php echo "<td> <a href='../Backend/bd/eliminar_empleado.php?no=".$mostrar->Clave_empleado."''><button type='button' class='btn btn-danger'><i class='fa fa-trash'></i></button></a> 

                                        <a href='Empleados_editar.php?no=".$mostrar->Clave_empleado."''><button type='button' class='btn btn-success'><i class='fa fa-edit'></i></button></a></td>"; ?>
                                </tr>
                                <?php } ?>
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>    
      
<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPersonas">    
            <div class="modal-body">
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                <label for="nombre" class="col-form-label">Apellidos:</label>
                <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                <label for="nombre" class="col-form-label">Direccion:</label>
                <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                <label for="nombre" class="col-form-label">Sueldo:</label>
                <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                <label for="pais" class="col-form-label">Correo:</label>
                <input type="text" class="form-control" id="pais">
                </div>                
                <div class="form-group">
                <label for="edad" class="col-form-label">Contraseña:</label>
                <input type="number" class="form-control" id="edad">
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
      
    
    
</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>