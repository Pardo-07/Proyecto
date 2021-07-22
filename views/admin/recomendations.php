<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                <h1 class="display-6">Valoraciones del Cliente

                </h1>
            </div>
            <div class="col-lg-6">
                <img class="" src="../../resources/img/dashboard/crud_usuario.png" alt="" width="70px">
            </div>    
        </div>  
        <div class="row">
            <div id="tabla" class="col-lg-12">
                
            </div>
        </div>  
    </div>   

    <!-- Bootstrap core JavaScript -->
    <script src="../../resources/js/bootstrap/bootstrap.bundle.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="../../resources/js/bootstrap/jquery.maskedinput.min.js"></script>
    <script src="../../resources/js/bootstrap/masked.js"></script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
    </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#tabla').load('../../app/api/tablavaloraciones.php');
        });
    </script>

    
</body>

</html>