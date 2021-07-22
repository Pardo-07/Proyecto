<div class="table-responsive"> 
    <br>       
    <table id="tablax" class="table table-striped table-bordered table-condensed" style="width:100%">
        <thead class="text-center">
            <tr class="align-middle">
                <th>Nombre Producto</th>
                <th>Valoración</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include "../../app/helpers/database.php";
                $query = "SELECT nombre_producto, ROUND(AVG(valoracion),1) FROM public.valoraciones 
                INNER JOIN producto ON producto.id_producto = valoraciones.id_producto GROUP BY nombre_producto;";
                $result = pg_query($db, $query);
                while($row = pg_fetch_array($result)){
            ?>
            <tr class="align-middle">
                <td><?php echo $row['nombre_producto']?></td>
                <td class="text-center" width="200px"><?php echo $row['round']?><img src="../../resources/img/dashboard/estrella.png" class="pb-1" alt="" width="40px"></td>
            </tr>    
            <?php
                }
            ?>                             
        </tbody>        
    </table>                    
</div>

<script src="../../resources/js/dashboard/tabla.js"></script>