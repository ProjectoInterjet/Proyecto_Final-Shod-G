<?php include "vistas/index_superior.php"?> 

<!--INICIO del cont principal-->
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/carusel1.jpg" alt="First slide" style="height: 100vh;">
      <div class="carousel-caption d-none d-md-block">
        <h1>Bienvenido @Administrador</h1>
        <p>Bueno y barato, no caben en un zapato "SHOD G"</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carusel2.jpg" alt="Second slide" style="height: 100vh;">
      <div class="carousel-caption d-none d-md-block">
        <h1>Bienvenido @Administrador</h1>
        <p>Bueno y barato, no caben en un zapato "SHOD G"</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carusel3.jpg" alt="Third slide" style="height: 100vh;">
      <div class="carousel-caption d-none d-md-block">
        <h1>Bienvenido @Administrador</h1>
        <p>Bueno y barato, no caben en un zapato "SHOD G"</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
<!--FIN del cont principal-->

<?php require_once "vistas/index_inferior.php"?>