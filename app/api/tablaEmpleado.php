<div class="table-responsive"> 
    <br>       
    <table id="tablax" class="table table-striped table-bordered table-condensed" style="width:100%">
        <thead class="text-center">
            <tr class="align-middle">
                <th>ID</th>
                <th>Nombre</th>
                <th>Profesion</th>  
                <th>Genero</th> 
                <th>Correo</th>                             
                <th>Dirección</th> 
                <th>Tipo de Usuario</th>
                <th>Estado</th>
                <th>Tipo de Empleado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include "../../app/helpers/database.php";
                $query = "SELECT id_empleado, nombre_emp, profesion, genero, correo_empleado, direccion_empleado, tipo_usuario, estado_usuario, tipo_empleado
                FROM empleado INNER JOIN tipo_usuario ON tipo_usuario.id_tipo_usuario = empleado.id_tipo_usuario INNER JOIN estado_usuario ON estado_usuario.id_estado_usuario = empleado.id_estado_usuario INNER JOIN tipo_empleado ON tipo_empleado.id_tipo_empleado = empleado.id_tipoempleado";
                $result = pg_query( $db, $query );
                while($row = pg_fetch_array($result)){
            ?>
            <tr class="align-middle">
                <td><?php echo $row['id_empleado']?></td>
                <td><?php echo $row['nombre_emp']?></td>
                <td><?php echo $row['profesion']?></td>
                <td><?php echo $row['genero']?></td>    
                <td><?php echo $row['correo_empleado']?></td> 
                <td><?php echo $row['direccion_empleado']?></td> 
                <td><?php echo $row['tipo_usuario']?></td> 
                <td><?php echo $row['estado_usuario']?></td> 
                <td><?php echo $row['tipo_empleado']?></td> 
                <td class="col-lg-2 ">
                <div class="row justify-content-md-center g-0">
                    <a class="btn btn-danger col col-lg-4 me-3" href="../../app/models/dashboard/empleados.php?id=<?php echo $row['id_empleado']?>"><img src="../../resources/img/dashboard/eliminar.png" alt="" width="25px"></a>
                    
                    <a class="btn btn-success col col-lg-4"  href="../../app/models/dashboard/ActualizarEmpleado.php?id=<?php echo $row['id_empleado']?>"><img src="../../resources/img/dashboard/borrar.png" alt="" width="25px"></a>
                </div>
                </td>
            </tr> 
            <?php
                }
            ?>                                 
        </tbody>        
    </table>                    
</div>

<script src="../../resources/js/dashboard/tabla.js"></script>