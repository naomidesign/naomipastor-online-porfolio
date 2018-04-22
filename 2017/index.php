<!DOCTYPE html>
<html lang="es">

<?php
include 'header.html'; 
?>
<body onload="init()">
    <div class="container-fluid bg-chalkboard">
    <section class="slider-container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/home/slider-01.png" alt="">
                </div>

                <!--<div class="item">
                   
                </div>-->

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="container">
        <h2 class="title-home">Bienvenido a mi página web y porfolio personal</h2>
        <p class="intro">Mi nombre es Naomi Pastor y me dedico al diseño gráfico y web, así como al motion graphics, ilustración y últimamente formándome en marketing digital y posicionamiento en buscadores. Me gusta todo lo que tiene que ver con la creatividad e intento demostrarlo en cada faceta de mi vida.</p>

<p class="intro">Aquí encontraréis un hueco en la enorme inmensidad de internet donde guardo todo lo que me importa acerca de la creatividad y el diseño. 
En esta web podrás ver desde los proyectos que he ido haciendo a lo largo de mis fases de estudios, hasta multitud de dibujos y creatividades varias que comencé haciendo desde que era una niña. ¡Disfruta del paseo!!</p>
        <span class="pencil"><img class="pull-right" src="img/home/lapiz.png" alt="lapiz"></span>
    </section>
    <section class="skills">
    <p class="text"><strong>El éxito de un proyecto</strong> depende de la buena interacción<br> 
de las habilidades que hacen que todo funcione.</p>
        
        <div class="container">
            <div class="col-md-2 col-sm-2 text-center"><img src="img/home/skill-01.svg">
            <p>Diseño web</p>
            
            </div>
            <div class="col-md-2 col-sm-2 text-center"><img src="img/home/skill-02.svg">
            <p>Desarrollo</p>
            </div>
                <div class="col-md-2 col-sm-2 text-center"><img src="img/home/skill-03.svg">
            <p>Estrategia</p>
            </div>
            <div class="col-md-2 col-sm-2 text-center"><img src="img/home/skill-04.svg">
            <p>Consulting</p>
            </div>
            <div class="col-md-2 col-sm-2 text-center"><img src="img/home/skill-05.svg">
            <p>Analítica Web</p>
            </div>
                <div class="col-md-2 col-sm-2 text-center"><img src="img/home/skill-06.svg">
            <p>SEO Offpage</p>
            </div>
             <div class="col-md-2 col-sm-2 text-center"><img src="img/home/skill-07.svg">
             <p>Posicionamiento</p>
            </div>
            <div class="col-md-2 col-sm-2 text-center"><img src="img/home/skill-13.svg">
             <p>Marketing Offline</p>
            </div>
                <div class="col-md-2 col-sm-2 text-center"><img src="img/home/skill-09.svg">
             <p>Ilustración</p>
            </div>
            <div class="col-md-2 col-sm-2 text-center"><img src="img/home/skill-10.svg">
            <p>Motion Graphics</p></div>
            <div class="col-md-2 col-sm-2 text-center"><img src="img/home/skill-11.svg">
            <p>Branding</p></div>
            <div class="col-md-2 col-sm-2 text-center"><img src="img/home/skill-12.svg">
            <p>Email Marketing</p></div>
                        
    </div>
        
        </div>
        
    </section>
        
        <section class="container proyectos-destacados">
        <h2 class="black text-center">Proyectos Destacados</h2>
            <p class="black text-center">Aunque todos los proyectos que he hecho son importantes y destacados para mí en cuanto a que doy siempre el 100%, estos tres son los que han abarcado más campos a nivel creatividad, estrategia y desarrollo. Formando parte desde el inicio de la idea, hasta la difusión de la web en Redes Sociales y seguimiento del posicionamiento SEO.</p>
        
            <div class="col-md-4 col-sm-4 grid">
					<figure class="effect-sadie">
						<img src="img/home/surcando.jpg" alt="Surcando los Bares"/>
						<figcaption>
							<h2>Surcando los Bares</h2>
							<p>Blog sobre bares, proyecto 360 <a href="surcando-los-bares.php">Ver más</a></p>
							
						</figcaption>			
					</figure>
				</div>
            
             <div class="col-md-4 col-sm-4 grid">
					<figure class="effect-sadie">
						<img src="img/home/serpak.jpg" alt="Surcando los Bares"/>
						<figcaption>
							<h2>Taller de motos Serpak</h2>
							<p>Estrategia Marketing Digital y posicionamiento. Proyecto 360º. <a href="taller-motos-serpak.php">Ver más</a></p>
							
						</figcaption>			
					</figure>
				</div>
            
             <div class="col-md-4 col-sm-4 grid">
					<figure class="effect-sadie">
						<img src="img/home/bioenergia.jpg" alt="Surcando los Bares"/>
						<figcaption>
							<h2>Cosmética in&out</h2>
							<p>Creación marca, packaging y diseño on/offline <br><a href="lanzamiento-bhu.php">Ver más</a></p>
							
						</figcaption>			
					</figure>
				</div>
            
            <div class="text-center">
            <a class="boton hvr-bubble-float-right" href="#">Ver más proyectos</a>
        </div>
        </section>
        
    
 </div>

   



        <!-- javascript -->

       <?php
        include 'footer.html';
?>

<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
<div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>