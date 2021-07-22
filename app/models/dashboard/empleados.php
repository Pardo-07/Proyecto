<?php
    if($_POST["accion"] == "insertar")
    { 
        ingresar(); 
    }
    else if($_POST["accion2"] == "actualizar")
    { 
        actualizar(); 
    }
    else if(!isset($_GET["id"]))
    { 
        exit(); 
    }
    else{
        eliminar(); 
    }         

    function ingresar(){
        include "../../helpers/database.php"; 
        $nombre = $_POST["nombre"];
        $usuario = $_POST["usuario"];
        $profesion = $_POST["profesion"];
        $direccion = $_POST["direccion"];
        $correo = $_POST["correo"];
        $genero = $_POST["genero"];
        $tipo = $_POST["tipo"];
        $estado = $_POST["estado"];
        $tipoEmp = $_POST["tipoEmp"];

        $query = "INSERT INTO empleado (id_tipoempleado, nombre_emp, profesion, genero, correo_empleado, direccion_empleado, usuario, id_tipo_usuario, id_estado_usuario) VALUES ('$tipoEmp', '$nombre', '$profesion', '$genero', '$correo', '$direccion', '$usuario', '$tipo', '$estado')";
        $result = pg_query($query); 
        
    }
    
    function eliminar(){
        include "../../helpers/database.php";   
        $id = $_GET["id"];
        $query = "DELETE FROM public.empleado WHERE id_empleado = '$id'";
        $result = pg_query($query);
        if ($result == true) {
            header("Location: ../../../vista/dashboard/Empleado.php");
        } 
    }
   
    function actualizar(){
        include "../../helpers/database.php"; 

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $usuario = $_POST["usuario"];
        $profesion = $_POST["profesion"];
        $tipo = $_POST["tipo"];
        $correo = $_POST["correo"];
        $genero = $_POST["genero"];
        $tipoEmp = $_POST["tipoEmp"];
        $estado = $_POST["estado"];
        $direccion = $_POST["direccion"];

        $query = "UPDATE public.empleado
        SET id_tipoempleado='$tipoEmp', nombre_emp='$nombre', profesion='$profesion', genero='$genero', correo_empleado='$correo', direccion_empleado='$direccion', usuario='$usuario', id_tipo_usuario='$tipo', id_estado_usuario='$estado'
        WHERE id_empleado = '$id';";
        $result = pg_query($query);
    }
?>