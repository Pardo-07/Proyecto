<?php require_once('../../config/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo($app_params['language']) ?>">
<?php include('../includes/header.php'); ?>
<body>
<?php include('../includes/navbar.php'); ?>
<section>
        <div class="row g-0">
          <div class="card mb-3 col-lg-6">
            <div class="">
              <img src="../../public/img/sliders/cacao.jpg" class="card-img-top 0" alt="...">
              <div class="card-body">
                    <h5 class="card-title">Ofertas</h5>
                    <p class="card-text">Es un alimento rico en grasas, carbohidratos y proteínas, nutrientes indispensables para aportar energía al organismo humano.</p>
                    <button type="button" class="btn btn-success">Ver Oferta</button>
                  </div>
              </div>
            </div>
            <div class="card mb-3 col-lg-6">
              <img src="../../public/img/sliders/chocolate.png" class="card-img-top 0" alt="...">
              <div class="card-body">
                    <h5 class="card-title">Ofertas</h5>
                    <p class="card-text">Es un alimento rico en grasas, carbohidratos y proteínas, nutrientes indispensables para aportar energía al organismo humano.</p>
                    <button type="button" class="btn btn-success">Ver Oferta</button>
                  </div>
              </div>
            </div>
          </div> 
        </div>
        
        
      <br>
      <div class="accordion accordion-flush mb-2" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Mision
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body"> Satisfacer a nuestros socios y clientes con una compra única de calidad, variedad, precio y servicio, basada en la atención y el compromiso de nuestros trabajadores.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Vision
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Ser una cooperativa independiente, innovadora, honesta y sostenible en la que comprar con capacidad de elección y buenos precios. Es decir, ser un modelo de empresa referente en el sector de la distribución.</div>
        </div>
      </div>
    </div>
    
  </section>
  <?php include('../includes/footer.php'); ?>
  <script src="../../public/js/jQuery/jquery.min.js"></script>
  <script src="../../public/js/bootstrap/bootstrap.bundle.min.js"></script>
      
</body>
</html>