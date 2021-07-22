<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../public/img/dashboard/icono.png" type="favicon/x-icon">

    <title>MarketFar</title>

    <link href="../../public/css/dashboard/login.css" rel="stylesheet" type="text/css">

    <link href="../../public/css/bootstrap/bootstrap.min.css" rel="stylesheet">   
    
    <style>
      img {
        -webkit-filter: grayscale(100%);
        filter: grayscale(50%);
      }
      .fondo{background-color: #2A2C36;}
    </style>
</head>
<body class="bg-dark-x">
    
    <section class="h-auto">
      <div class="row g-0">
        <div class="col-lg-7">
          <img src="../../public/img/dashboard/login1.jpg" class="d-block h-auto img-fluid " alt="">
        </div>
        <div class="col-lg-5">
          <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 d-flex justify-content-center mb-auto">
            <img src="../../public/img/dashboard/logo.png" alt="" class="w-50" >
          </div>
          <div class="px-lg-5 py-lg-4 p-4 w-100 mt-auto">
            <h1 class="text-light font-weight-bold mb-4 display-6 mx-0 ">"Inicie Sesión"</h1>
            <form>
              <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label text-light">E-mail</label>
                <input type="email" class="form-control bg-dark py-2 border-0 text-light" placeholder="Ingresa tu correo" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label text-light">Contraseña</label>
                <input type="password" class="form-control bg-dark py-2 border-0 text-light" placeholder="Ingresa tu contraseña" id="exampleInputPassword1">
                <div class="pt-1"><a href="#" id="emailHelp" class="form-text text-muted text-decoration-none">¿Has olvidado tu contraseña?</a></div>
              </div>
              <a href="index.php" class="btn btn-dark w-100 py-2 btn-outline-light"><img src="../../public/img/dashboard/usuario.png" alt="" width="25px" class="img-fluid img-thumbnail">Iniciar Sesión</a>
            </form>
          </div>
          <div class="mt-auto">
            <br>
          <a href="Usuario.php" class="btn btn-dark w-25 py-2 btn-outline-light rounded mx-auto d-block">Crear Usuario</a>
          </div>
        </div>        
      </div>
    </section>

    <script src="../../public/js/efectos/jquery.min.js"></script>
    <script src="../../public/js/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>