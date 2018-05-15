<?php
include 'header.html'; 
?>

<nav class="container">            
    <ul class="flex">
      <li><a href="about">About me</a></li>
      <li><a class="active" href="portfolio">Portfolio</a></li>
      <li><a href="http://www.naomipastor.com/blog">Blog</a></li>
    </ul>
</nav>

<div class="container">
      <div class="col s12">
        <a href="index.php" class="breadcrumb">naomipastor.com</a>
        <a href="portfolio.php" class="breadcrumb">portfolio</a>
      </div>
</div>


<section class="about">
    <div class="row container">
        <div class="col l6 push-l1">
            <h1>Proyectos</h1>

            <p>
              Aquí aparecen algunos de mis proyectos, que van desde el diseño industrial hasta el diseño gráfico, tratando de aportar lo máximo en cada uno de ellos. 
            </p>
        </div>
    </div>
    

<div class="bg-gris">
<div class="container">
    <div class="projects-gallery masonry ">
      <a href="portfolio/surcando-los-bares"><div class="col l6 masonry-brick surcando">
         <img class="responsive-img" src="img/portfolio/surcando-los-bares.jpg" alt="surcando los bares">
         <div class="portfolio-text">
            <h2>Surcando los bares</h2>
            <p>Proyecto personal de un blog con temática gastronómica y de viajes.</p>
        </div>
      </a>
      </div>

      <div class="col l6 masonry-brick surcando">
         <img class="responsive-img" src="img/portfolio/petrarca.jpg" alt="surcando los bares">
         <div class="portfolio-text">
            <h2>Petrarca Photography</h2>
            <p>Diseño web en Wordpress.</p>
        </div>
      </div>

      <div class="col l6 masonry-brick surcando">
         <a href="serpak"><img class="responsive-img" src="img/portfolio/motoserpak.jpg" alt="surcando los bares">
         <div class="portfolio-text">
            <h2>Taller de motos MotoSerpak</h2>
            <p>Diseño web y estrategia de Marketing digital para taller de motos en Madrid.</p>
        </div>
        </a>
      </div>

      


    </div>
</div>
</div>
</section>

<div class="row">


</div>


<?php
  include 'footer.html';
?>
