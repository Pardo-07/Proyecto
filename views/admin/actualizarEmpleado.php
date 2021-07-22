<?php 
    include "../../helpers/database.php"; 
    $id = $_GET["id"];
    $query = "SELECT id_empleado, nombre_emp, profesion, correo_empleado, direccion_empleado, usuario FROM empleado WHERE id_empleado='$id'";
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
                <h1 class="display-6">Actualizar de Empleados

                </h1>
            </div>
            <div class="col-lg-12 text-center">
                <img class="" src="../../../resources/img/dashboard/crud_usuario.png" alt="" width="70px">
            </div>    
        </div>  
        <div class="row justify-content-md-center">
            <div class="col-lg-8 mb-3">
                <form class="row g-3 needs-validation ms-2 mt-2" novalidate>
                    <div class="row">   
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <input name="id2" id="id" type="hidden" value="<?php echo $row['id_empleado']?>" type="text" class="form-control" id="validationCustom01" value="" required>
                                    <div class="invalid-feedback">Escoja una opción</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Nombre Empleado</label>
                                    <input type="text" value="<?php echo $row['nombre_emp']?>" class="form-control" name="nombre" id="nombre" id="validationCustom01" value="" required>
                                    <div class="invalid-feedback">Ingrese datos</div>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Usuario</label>
                                    <input type="text" value="<?php echo $row['usuario']?>" class="form-control" name="usuario" id="usuario" id="validationCustom01" value="" required>
                                    <div class="invalid-feedback">Ingrese datos</div>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="validationCustom07" class="form-label">Profesión</label>
                                    <input type="text" value="<?php echo $row['profesion']?>" class="form-control" name="profesion" id="profesion" id="validationCustom07" value="" required>
                                    <div class="invalid-feedback">Ingrese datos</div>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom10" class="form-label">Tipo Usuario</label>
                                    <select class="form-select" name="tipo" id="tipo" id="validationCustom10" required>
                                    <option selected disabled value="">Escoje...</option>
                                    <option value="2">Administrador</option>
                                    <option value="3">Básico</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Seleccione un tipo de empleado
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="validationCustomUsername" class="form-label">Correo Empleado</label>
                            <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" value="<?php echo $row['correo_empleado']?>" class="form-control" name="correo" id="correo" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Ingrese un correo electronico
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom09" class="form-label">Genero</label>
                            <select class="form-select" name="genero" id="genero" id="validationCustom09" required>
                            <option selected disabled value="">Escoje...</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="No definir">No definir</option>
                            </select>
                            <div class="invalid-feedback">
                                Ingrese datos
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="validationCustom10" class="form-label">Tipo Empleado</label>
                            <select class="form-select" name="tipoEmp" id="tipoEmp" id="validationCustom10" required>
                            <option selected disabled value="">Escoje...</option>
                            <option value="1">Administrador</option>
                            <option value="2">Empleado</option>
                            <option value="3">Secretario/a</option>
                            <option value="3">Cajero</option>
                            </select>
                            <div class="invalid-feedback">
                            Seleccione un tipo de empleado
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom11" class="form-label">Estado Empleado</label>
                            <select class="form-select" name="estado" id="estado" id="validationCustom11" required>
                            <option selected disabled value="">Escoje...</option>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                            </select>
                            <div class="invalid-feedback">
                            Seleccione un estado
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="validationCustom07" class="form-label">Dirección del Empleado</label>
                            <input type="text" class="form-control" value="<?php echo $row['direccion_empleado']?>" name="direccion" id="direccion" id="exampleFormControlTextarea2" rows="3"></input>
                            <div class="valid-feedback">
                            Ingrese una dirección
                            </div>
                        </div>
                    </div>                                
                    <!-- Button trigger modal -->
                    <div class="row justify-content-md-center g-0 mt-5">
                        <button type="button" onclick="actualizar();" class="btn btn-primary col-md-3 me-4" >
                            Actualizar registro
                        </button>
                    </div>
                </form>
            </div>
        </div>
    <script src="../../../resources/js/dashboard/anidado.js"></script>
    <script src="../../../resources/js/dashboard/form.js"></script>
    <script src="../../../resources/js/efectos/jquery-3.2.1.min.js"></script>
    <script src="../../controllers/empleado.js"></script>

</body>
</html>