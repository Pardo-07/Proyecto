<!doctype html>
<html lang="en" class="h-100">
<?php include('header.php'); ?>

<body class="d-flex flex-column h-100 g-0">
    <?php include('navbar.php'); ?>


    <div class="container m-3">
        <div class="row">
            <div class="col-12">
                <h1 class="page-header ">Productos</h1>
            </div>
        </div>
    </div>

    <div class="album py-5 bg-white h-100 ">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Categorias</label>
                    <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Escoje...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Marcas</label>
                    <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Escoje...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <br>
            <hr>
            <div class="row mt-1">
                <div class="col-md-12">

                <?php foreach($data as $product)

                echo '<div class="card">
                <a href="#" class="card-link text-danger like">
                    <i class="fas fa-heart"></i>
                </a>
            </div>
            <div class="card-body">
                <h4 class="card-title">'. $product['nombre_producto'] .'</h4>
                <p class="card-text">
                   '. $product['descripcion'] .'</p>
                <div class="buy d-flex justify-content-between align-items-center">
                    <div class="price text-success">
                        <h5 class="mt-4">$'.$product['costo_venta'].'</h5>
                    </div>
                    <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>'

                ?>
                    
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    <script src="public\js\jQuery\jquery.min.js"></script>
    <script src="public\js\bootstrap\bootstrap.bundle.min.js"></script>

</body>

</html>