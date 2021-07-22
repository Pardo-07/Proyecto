<!DOCTYPE html>
<html lang="en">
<?php include('../includes/header.php'); ?>
<body class="d-flex flex-column h-100 g-0">
<?php include('../includes/navbar.php'); ?>
    <div class="row">
        <div class="col-lg-12 mt-4 pl-5 text-center">
            <h1 class="display-6">Detalle factura</h1>
        </div>
        <div class="col-lg-12 text-center">
            <img class="" src="../../../resources/img/dashboard/crud_usuario.png" alt="" width="70px">
        </div>    
    </div>  
    <div class="container mt-5">
        <form action="../../reports/detalleReporte.php" method="post" class="row g-3 needs-validation ms-2 mt-2 needs-validation" novalidate>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive"> 
                        <br>       
                        <table id="tablax" class="table table-striped table-bordered table-condensed" style="width:100%">
                            <thead class="text-center">
                                <tr class="align-middle">
                                    <th>ID</th>
                                    <th>Nombre producto</th>
                                    <th>Nombre cliente</th>                              
                                    <th>Fecha</th>
                                    <th>Estado Factura</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    include "../../helpers/database.php";
                                    $id = $_GET["id"];
                                    $query = "SELECT id_factura_producto, nombre_producto, subtotal, detalle_producto.cantidad, nombre_cliente, fecha, estado_factura, subtotal*detalle_producto.cantidad AS total
                                    FROM public.detalle_producto 
                                    INNER JOIN factura_producto ON factura_producto.id_factura_producto = detalle_producto.id_factura 
                                    INNER JOIN producto ON producto.id_producto = detalle_producto.id_producto
                                    INNER JOIN cliente ON cliente.id_cliente = factura_producto.id_cliente
                                    INNER JOIN estado_factura ON estado_factura.id_estado_factura = factura_producto.id_estado_factura 
                                    WHERE id_factura_producto = '$id'";
                                    $result = pg_query($db, $query );
                                    while($row = pg_fetch_array($result)){
                                ?>
                                <tr class="align-middle">
                                    <td><?php echo $row['id_factura_producto']?></td>
                                    <td><?php echo $row['nombre_producto']?></td>
                                    <td><?php echo $row['nombre_cliente']?></td>
                                    <td><?php echo $row['fecha']?></td>
                                    <td><?php echo $row['estado_factura']?></td>
                                    <td><?php echo $row['cantidad']?></td>
                                    <td><?php echo $row['subtotal']?></td>
                                    <td ><?php echo $row['total']?></td>
                                </tr>  
                                <?php
                                    }
                                ?>                         
                            </tbody>        
                        </table>                    
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="row justify-content-md-center g-0 mt-5">
                    <a class="btn btn-danger col col-lg-4"  href="../../reports/detalle.php?id=<?php echo $row['id_factura_producto']?>">Imprimir reporte</a>        
                </div>
            </div>
        </form>   
    </div>
    <?php include('../includes/footer.php'); ?>
    <script src="../../../resources/js/dashboard/anidado.js"></script>
    <script src="../../../resources/js/dashboard/form.js"></script>

</body>
</html>