<!DOCTYPE html>
<html lang="es">
<?php include('../../includes/admin/header.php'); ?>
<body class="row g-0">

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="border-right popo" id="sidebar-wrapper">
            <div class="sidebar-heading papa"><img src="../../../public/img/dashboard/logo.png" alt="" width="200px" ></div>
            <div class="px-1 mx-1 list-group list-group-flush col">
                <a id="menu1" class="list-group-item list-group-item-action btn btn-light my-1 rounded"><img src="../../../public/img/dashboard/producto.png" alt="" width="25px" class="img-fluid img-thumbnail"> Productos</a>
                <a id="menu3" class="list-group-item list-group-item-action btn btn-light my-1"><img src="../../../public/img/dashboard/ordenes.png" alt="" width="25px" class="img-fluid img-thumbnail"> Ordenes</a>
                <a id="menu6" class="list-group-item list-group-item-action btn btn-light my-1"><img src="../../../public/img/dashboard/empleados.png" alt="" width="25px" class="img-fluid img-thumbnail"> Empleado</a>
                <a id="menu7" class="list-group-item list-group-item-action btn btn-light my-1"><img src="../../../public/img/dashboard/empleados.png" alt="" width="25px" class="img-fluid img-thumbnail"> Valoraciones</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

        <?php include('../../includes/admin/navbar.php'); ?>
            <iframe id="content" class="px-1 mh-100" width="100%" height="1500px"></iframe>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="../../../public/js/efectos/jquery.min.js"></script>
    <script src="../../../public/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../../public/js/dashboard/dashboard.js"></script>
    <script>
	$(document).ready(function(e) {
		$('#menu1').on('click', function(){
			$('#content').attr('src', 'Productos.php');
		});
		$('#menu3').on('click', function(){		
			$('#content').attr('src', 'Ordenes.php');
		});
        $('#menu6').on('click', function(){		
			$('#content').attr('src', 'Empleado.php');
		});
        $('#menu7').on('click', function(){		
			$('#content').attr('src', 'valoraciones.php');
		});
	});
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
</body>
</html>