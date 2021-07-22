<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../resources/img/dashboard/icono.png" type="favicon/x-icon">

    <title>MarketFar</title>

    <!-- Bootstrap core CSS -->
    <link href="../../resources/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    

    <!-- Custom styles for this template -->
    <link href="../../resources/css/dashboard/dashboard.css" rel="stylesheet">
    
</head>

<body class="g-0">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="display-6">Administración de Productos</h1>
            </div>
            <div class="col-lg-6">
                <img class="" src="../../resources/img/dashboard/crud_usuario.png" alt="" width="70px">
            </div>    
        </div>  
        
        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-md-center">
                    <div class="col-lg-8 mb-3">
                        <form  class="row g-3 needs-validation ms-2 mt-2" novalidate>
                            <div class="row">  
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Nombre Producto</label>
                                        <input id="nombre"  name="nombre" type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="invalid-feedback">Ingrese datos</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationCustom02" class="form-label">Descripción del producto</label>
                                        <input type="text" id="descripcion"  name="descripcion" class="form-control" id="exampleFormControlTextarea1"></input>
                                        <div class="invalid-feedback">Ingrese datos</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Costo </label>
                                    <div class="input-group mb-3">                            
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input id="costo" name="costo" type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="invalid-feedback">Ingrese datos</div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom03" class="form-label">Cantidad de Producto</label>
                                    <input id="cantidad" name="cantidad" type="number"  class="form-control" id="validationCustom03" required>
                                    <div class="invalid-feedback">Ingrese datos</div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="validationCustom04" class="form-label">Tipo de Producto</label>
                                    <select id='select1' name="tipo" onchange='cargarSelect2(this.value);'  class="form-select" id="validationCustom04" required>
                                    <option value="1">Bebidas</option>
                                    <option value="2">Abarrotes</option>
                                    <option value="3">Limpieza</option>
                                    <option value="4">Carnes</option>
                                    <option value="5">Lacteos</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom04" class="form-label">Marca</label>
                                    <select id='select2' name="marca" onchange='seleccinado_select2();'  class="form-select" id="validationCustom04" required>
                                    </select>
                                    <div class="invalid-feedback">
                                        Escoja una marca***
                                    </div>
                                </div>
                                
                                <!-- Button trigger modal -->
                                <div class="row justify-content-md-center g-0 mt-5">
                                    <button type="button" name='accion' value='insertar' onclick="enviarDatos();" class="btn btn-primary col-md-3 me-4" >
                                        Agregar registro
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="row" id="tabla"></div>
            </div>
        </div>  
    </div>   
    
    <!-- Bootstrap core JavaScript -->
    <script src="../../resources/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../resources/js/dashboard/anidado.js"></script>
    <script src="../../resources/js/dashboard/form.js"></script>
    <script src="../../resources/js/efectos/jquery-3.2.1.min.js"></script>

    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
    </script>
    <script src="../../app/controllers/productos.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#tabla').load('../../app/api/tablaproducto.php');
        });
    </script>

</body>

</html>