<?php 
    include "../../helpers/database.php"; 
    $id = $_GET["id"];
    $query = "SELECT id_producto, nombre_producto, descripcion, costo_venta, cantidad, marca, tipo_producto FROM producto INNER JOIN marca ON marca.id_marca = producto.id_marca INNER JOIN tipo_producto ON tipo_producto.id_tipo_producto = producto.id_tipo_producto WHERE id_producto = '$id'";
    $result = pg_query($query); 

    $row=pg_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
</head>
<body>
    <div class="row">
        <div class="col-lg-12 mt-4 pl-5 text-center">
            <h1 class="display-6">Actualizar de Productos</h1>
        </div>
        <div class="col-lg-12 text-center">
            <img class="" src="../../../resources/img/dashboard/crud_usuario.png" alt="" width="70px">
        </div>    
    </div>  
    <div class="container mt-5">
        <form class="row g-3 needs-validation ms-2 mt-2 needs-validation" novalidate>
            <div class="row">  
                <div class="col-md-12">
                    <div class="col-md-6">
                        <input name="id" id="id" type="hidden" value="<?php echo $row['id_producto']?>" type="text" class="form-control" id="validationCustom01" value="" required>
                        <div class="invalid-feedback">Escoja una opción</div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Nombre Producto</label>
                        <input id="nombre" name="nombre" value="<?php echo $row['nombre_producto']?>" type="text" class="form-control" id="validationCustom01" value="" required>
                        <div class="invalid-feedback">Escoja una opción</div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Descripción del producto</label>
                        <input type="text" id="descripcion"  name="descripcion" value="<?php echo $row['descripcion']?>" class="form-control" id="exampleFormControlTextarea1"></input>
                        <div class="invalid-feedback">Escoja una opción</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Costo de Venta</label>
                    <div class="input-group mb-3">                            
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input id="costo" name="costo" type="number" value="<?php echo $row['costo_venta']?>" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="invalid-feedback">Escoja una opción</div>
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03" class="form-label">Cantidad de Producto</label>
                    <input id="cantidad" name="cantidad" type="number" value="<?php echo $row['cantidad']?>" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">Escoja una opción</div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Tipo de Producto</label>
                    <select id='select1' name="tipo" onchange='cargarSelect2(this.value);' name="tipo" class="form-select" id="validationCustom04" required>
                    <option value="1">Bebidas</option>
                    <option value="2">Abarrotes</option>
                    <option value="3">Limpieza</option>
                    <option value="4">Carnes</option>
                    <option value="5">Lacteos</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Marca</label>
                    <select id='select2' name="marca" onchange='seleccinado_select2();' value="<?php echo $row['marca']?>"  name="marca" class="form-select" id="validationCustom04" required>
                    </select>
                    <div class="invalid-feedback">
                        Escoja una marca***
                    </div>
                </div>
                
                <!-- Button trigger modal -->
                <div class="row justify-content-md-center g-0 mt-5">
                    <button type="button" onclick="actualizar();" class="btn btn-primary col-md-3 me-4" >
                        Actualizar registro
                    </button>
                </div>
            </div>
        </form>
        
    </div>
    <script src="../../../resources/js/dashboard/anidado.js"></script>
    <script src="../../../resources/js/dashboard/form.js"></script>
    <script src="../../../resources/js/efectos/jquery-3.2.1.min.js"></script>
    <script src="../../controllers/productos.js"></script>
</body>
</html>