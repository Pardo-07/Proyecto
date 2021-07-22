<div class="table-responsive"> 
    <br>       
    <table id="tablax" class="table table-striped table-bordered table-condensed" style="width:100%">
        <thead class="text-center">
            <tr class="align-middle">
                <th>ID</th>
                <th>Cliente</th>
                <th>Fecha $</th>                              
                <th>Estado Factura </th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include "../../app/helpers/database.php";
                $query = "SELECT id_factura_producto, nombre_cliente, fecha, estado_factura
                FROM public.factura_producto INNER JOIN cliente ON cliente.id_cliente = factura_producto.id_cliente
                INNER JOIN estado_factura ON estado_factura.id_estado_factura = factura_producto.id_estado_factura
                ORDER BY id_factura_producto ASC;";
                $result = pg_query( $db, $query );
                while($row = pg_fetch_array($result)){
            ?>
            <tr class="align-middle">
                <td><?php echo $row['id_factura_producto']?></td>
                <td><?php echo $row['nombre_cliente']?></td>
                <td><?php echo $row['fecha']?></td>
                <td><?php echo $row['estado_factura']?></td>
                <td class="col-lg-3 ">
                    <div class="row justify-content-md-center g-0">
                    <a class="btn btn-success col col-lg-4"  href="../../app/models/dashboard/detalle_factura.php?id=<?php echo $row['id_factura_producto']?>">Ver Detalle</a>                                  
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