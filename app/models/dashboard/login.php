<?php 

include "../../helpers/database.php";   
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
    $sql ="select * from empleado where usuario = '".pg_escape_string($_POST['uname'])."' and clave ='".pg_escape_string($_POST['password'])."'";
    $data = pg_query($db,$sql); 
    $login_check = pg_num_rows($data);
    $row=pg_fetch_array($data);
    if($login_check > 0){ 
        if ($row['id_tipo_usuario'] == 1) {
            $_SESSION['uname'] = $usuario;

            header("Location: ../../../vista/dashboard/Dashboard.php");

        } else if($row['id_tipo_usuario'] == 3){

            $_SESSION['uname'] = $usuario;
            header("Location: ../../../vista/dashboard/Dashboard2.php");
        }
    }
}
?>