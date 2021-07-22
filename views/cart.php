<!doctype html>
<html lang="en" class="h-100">
<?php include('../includes/header.php'); ?>
<body class="d-flex flex-column h-100 g-0">
<?php include('../includes/navbar.php'); ?>
    
  <section class="container">
      <div class="row mt-5">
        <section class="col-12 d-none d-md-block">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="trsn" title="Go back to Home">Home</a></li>
            <li class="breadcrumb-item"><span>Carrito</span></li>
          </ol>
        </section>
      </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1 class="page-header">Carrito de Compra</h1>
            </div>
        </div>
        <div class="row">
            <section class="col-12">
            <div class="bg-secondary alert text-white">El carrito de compras esta actualmente lleno.</div>
            <a href="javascript:history.back()" class="btn btn-link" title="← Go back &amp; Keep Shopping">← Regresar y continuar llenando el carrito</a>
            </section>
        </div>
        <div class="table-responsive"> 
            <br>       
            <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                <thead class="text-center">
                    <tr class="align-middle">
                        <th>Nombre Producto</th>
                        <th>Subtotal $</th>     
                        <th>Total $</th>                              
                        <th>Cambio $</th>
                        <th>Impuesto</th>    
                        <th>Fecha</th>  
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle">
                        <td>Chocolate</td>
                        <td>3.15</td> 
                        <td>3.56</td>  
                        <td>0.04</td> 
                        <td>13.0%</td>  
                        <td>15/03/2021</td>
                    </tr>                              
                </tbody>        
            </table>     
            <a href="index.php" class="ms-2 btn btn-success w-25 py-2 ">Completar compra</a>               
        </div>
    </div>

    <?php include('../includes/footer.php'); ?>
  <script src="../../resources/js/jQuery/jquery.min.js"></script>
  <script src="../../resources/js/bootstrap/bootstrap.bundle.min.js"></script>
  </body>