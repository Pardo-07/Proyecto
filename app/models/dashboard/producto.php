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
        $descripcion = $_POST["descripcion"];
        $costo = $_POST["costo"];
        $cantidad = $_POST["cantidad"];
        $tipo = $_POST["tipo"];
        $marca = $_POST["marca"];

        $query = "INSERT INTO producto(id_tipo_producto, nombre_producto, cantidad, costo_venta, id_marca, descripcion) VALUES ('$tipo' ,'$nombre', '$cantidad', '$costo', '$marca', '$descripcion')";
        $result = pg_query($query); 
    }
    
    function eliminar(){
        include "../../helpers/database.php";   
        $id = $_GET["id"];
        $query = "DELETE FROM public.producto WHERE id_producto = '$id'";
        $result = pg_query($query);
        if ($result == true) {
            header("Location: ../../../vista/dashboard/Productos.php");
        } 
    }
   
    function actualizar(){
        include "../../helpers/database.php"; 

        $id = $_POST["id2"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $costo = $_POST["costo"];
        $cantidad = $_POST["cantidad"];
        $tipo = $_POST["tipo"];
        $marca = $_POST["marca"];

        $query = "UPDATE public.producto SET id_tipo_producto='$tipo', nombre_producto='$nombre', cantidad='$cantidad', costo_venta='$costo', id_marca='$marca', descripcion='$descripcion' WHERE id_producto='$id'";
        $result = pg_query($query);
        if ($result == true) {
            header("Location: ../../../vista/dashboard/Productos.php");
        } 
    }
?>