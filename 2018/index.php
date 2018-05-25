<?php
include 'header.html'; 
?>

<nav class="container">            
    <ul class="flex">
      <li><a href="about">About me</a></li>
      <li><a href="portfolio">Portfolio</a></li>
      <li><a href="http://www.naomipastor.com/blog">Blog</a></li>
    </ul>
</nav>


    <!--top-image -->

    <div class="bg-header z-depth-1">
        <div class="container">
          <img class="hide-on-small-only" src="img/creatividad.png" alt="la creatividad es adictiva">
          <img class="show-on-small hide-on-med-and-up" src="img/creatividad-mobile.png" alt="la creatividad es adictiva">

        </div>
    </div>


    <!--intro-->
    <section class="intro container animatedParent">
    <div class="row">
    <div class="col l6 push-l1 animated fadeInUpShort animateOnce">
        <h1 class=" ">Hello World!</h1>
        <p class="flow-text">Creativa de nacimiento. Mi objetivo es acompañar a las ideas en todo su proceso vital, desde el nacimiento: a través del branding, concepto creativo, etc. hasta su promoción posterior pasando 
por su desarrollo tanto a nivel web, como de diseño, ilustración o incluso, animación. </p>
        <blockquote>
          Me mantengo inquieta, curiosa e inconformista, aprendiendo cada día más sobre el diseño y la tecnología para abarcar todo cuanto me sea posible del proceso creativo de un proyecto.
        </blockquote>
</div>

<div class="col l3 push-l1 animated fadeInUpShort delay-500">
    <img class="responsive-img" src="img/hello-world.gif" alt="hello world">
</div>

</div>
    </section>


    <!-- mi know-how -->
    <section class="container animatedParent">
      <h1 class="animated fadeInUpShort">Know How</h1>
    
    <div class="row skills">

      <div class="start col l3 animated fadeInLeftShort">
        <div class="col l6 s6">
          <p>Generación de ideas</p>
          <img src="img/ideas.png" alt="icon ideas">
        </div>
        <div class="col l6 s6">
          <img src="img/estrategia.png" alt="icon estrategia">  
          <p>Estrategia</p>
        </div>
        <div class="start-title animated fadeInLeftShort">
          <strong>START</strong>
        </div>
      </div>


      <div class="development col l6 animated fadeInLeftShort delay-500">
        
        <div class="col l9">
          <img src="img/branding.png" alt="icon ideas">
          <p>Branding</p>
          <img src="img/responsive.png" alt="icon estrategia">  
          <p>Diseño/Desarrollo web</p>
        </div>


        <div class="col l3 ">
          <p>Ilustración</p>
          <img src="img/drawing.png" alt="icon ilustración">  
          
          <img src="img/motion.png" alt="icon Motion Graphics">
          <p>Motion Graphics</p> 

          <img src="img/project.png" alt="icon project management">  
          <p>Project Management</p>
          
           <div class="blue-circle"><span>++</span></div>
          
        </div>

        <div class="development-title animated fadeInLeftShort">
          <strong>DEVELOPMENT</strong>
        </div>
      </div>



      <div class="growth col l3 animated fadeInLeftShort delay-1000">
        <div class="col l6 s6">
          <p>Paid Media</p>
          <img src="img/paid.png" alt="icon paid media">

          <p>off</p>
          <img src="img/off.png" alt="icon estrategia">  
          
        </div>

        <div class="col l6 s6">
          <p>Analítica</p>
         <img src="img/analitica.png" alt="icon analitica">  
          

          <p>Social</p>
          <img src="img/social.png" alt="icon social">  
          
        </div>

        <div class="growth-title animated fadeInLeftShort">
          <strong>GROWTH</strong>
        </div>
      </div>
    </div>


    </section>


    <section class="container">
    <div class="row">
        <h2>Case studies</h2>
        <p class="col l6">Proyectos tratados con mucho mimo en los que he podido formar parte de todo el proceso de nacimiento, desarrollo y crecimiento a nivel creativo y web. </p>
    </div> 
    

    <div class="row case-studies">
      <div class="col l6">
        <a href="surcando-los-bares"> <img class="responsive-img" src="img/portfolio/surcando-los-bares.jpg" alt="surcando los bares"></a>
         <a href="surcando-los-bares"><div class="portfolio-text">
            <h2>Surcando los bares</h2>
            <p>Proyecto personal de un blog con temática gastronómica y de viajes.</p>
        </div></a>
      </div>

  

      <div class="col l6">
        <a href="serpak"> <img class="responsive-img" src="img/serpak.jpg" alt="MotoSerpak">
         <div class="portfolio-text">
            <h2>Taller de motos MotoSerpak</h2>
            <p>Diseño web y estrategia de Marketing digital para taller de motos en Madrid.</p>
        </div>
        </a>
      </div>

      <a class="left waves-effect waves-light btn-large" href="portfolio">Ver más proyectos <i class="material-icons">keyboard_arrow_right</i></a>


    </div>



  
    </section>

    <?php
      include 'footer.html';
    ?>
