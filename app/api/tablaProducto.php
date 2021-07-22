<div class="table-responsive"> 
    <br>       
    <table id="tablax" class="table table-striped table-bordered table-condensed" style="width:100%">
        <thead class="text-center">
            <tr class="align-middle">
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>                                
                <th>Costo de Venta $</th>  
                <th>Cantidad</th>
                <th>Marca</th>
                <th>Tipo de Producto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include "../../app/helpers/database.php";
                $query = "SELECT id_producto, nombre_producto, descripcion, costo_venta, cantidad, marca, tipo_producto 
                FROM producto INNER JOIN marca ON marca.id_marca = producto.id_marca INNER JOIN tipo_producto ON tipo_producto.id_tipo_producto = producto.id_tipo_producto";
                $result = pg_query( $db, $query );
                while($row = pg_fetch_array($result)){
            ?>
            <tr class="align-middle">
                <td><?php echo $row['id_producto']?></td>
                <td><?php echo $row['nombre_producto']?></td>
                <td><?php echo $row['descripcion']?></td>
                <td><?php echo $row['costo_venta']?></td>    
                <td><?php echo $row['cantidad']?></td> 
                <td><?php echo $row['marca']?></td> 
                <td><?php echo $row['tipo_producto']?></td> 
                <td class="col-lg-2 ">
                <div class="row justify-content-md-center g-0">
                    <a class="btn btn-danger col col-lg-4 me-3" href="../../app/models/dashboard/producto.php?id=<?php echo $row['id_producto']?>"><img src="../../resources/img/dashboard/eliminar.png" alt="" width="25px"></a>
                    
                    <a class="btn btn-success col col-lg-4"  href="../../app/models/dashboard/ActualizarProducto.php?id=<?php echo $row['id_producto']?>"><img src="../../resources/img/dashboard/borrar.png" alt="" width="25px"></a>
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