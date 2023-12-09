<?php
 include 'templates/header.php';
 include 'templates/navegacion.php';
 // include 'templates/navegacion1.php';
?>

 <!-- Swiper -->
  <div class="swiper-container soporte d-none d-md-block" id="tamaño_soporte">
    <div class="swiper-wrapper">      
      <div class="swiper-slide"><img src="imagenes/plastic1.jpg" class="img-fluid"></div>
      <div class="swiper-slide"><img src="imagenes/plastic2.jpg" class="img-fluid"></div>
      <div class="swiper-slide"><img src="imagenes/plastic3.jpg" class="img-fluid"></div>
      <div class="swiper-slide"><img src="imagenes/plastic.jpg" class="img-fluid"></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>


  <section id="animacion" class="swiper-container d-md-none">
    <div class="swiper-wrapper">
      <div class="swiper-slide d-flex justify-content-center align-items-center" style="background-image: url('imagenes/movil/imagen2.jpg')">
      </div>
      <div class="swiper-slide d-flex justify-content-center align-items-center" style="background-image: url('imagenes/movil/imagen1.jpg')">
      </div>
      <div class="swiper-slide d-flex justify-content-center align-items-center" style="background-image: url('imagenes/movil/imagen3.jpg')">
      </div>
      <div class="swiper-slide d-flex justify-content-center align-items-center" style="background-image: url('imagenes/movil/imagen4.jpg')">
      </div>
      <div class="swiper-slide d-flex justify-content-center align-items-center" style="background-image: url('imagenes/movil/imagen5.jpg')">
      </div>
       <div class="swiper-slide d-flex justify-content-center align-items-center" style="background-image: url('imagenes/movil/imagen6.jpg')">
      </div>             
    </div>

    <!--Botones de Paginacion-->
    <div class="swiper-pagination"></div>
  </section>


  <!--Seccion Bienvenidos-->
      <!-- <section id="logocarro" class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
            	<img src="images/limpo4.jpg" class="img-fluid">
            </div> 
          </div>
        </div>
      </section> -->


      <!--Seccion Bienvenidos-->
      <section id="bienvenidos" class="py-5">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-4 text-center">
              <div class="contenedor-video d-inline-block position-relative text-truncate">
                <img src="imagenes/toluca.jpg" alt="Imagen del video promocional del sitio" class="img-fluid">
               <a href="https://www.youtube.com/watch?v=ltRv1QGjS7o" class="venobox-video" data-vbtype="video"><i class="fas fa-play"></i></a>
              </div>
            </div>
            <div class="col-12 col-lg-4 pt-4 pt-lg-0 text-muted text-center text-lg-left">
              <p class="text-justify">
              Termoformados Industriales Toluca, S.A. de C.V.
              es una empresa mexicana que inicia sus
              operaciones en 2009 con el objetivo primordial
              en la transformación de materiales plásticos
              para empaque y embalaje, está a la vanguardia
              para abastecer las necesidades de insumos de
              empaque de la industria alimenticia
              primordialmente y de toda clase de industria que
              tengan necesidades de empaque en blíster en
              todas sus modalidades.
              </p>
              <a href="nosotros.php" class="btn btn-primary mt-3">Leer más</a>
            </div>
          </div>
        </div>
      </section>


      <section class="text-center">
      <div class="container">
      	<h1 class="display-2 font-weight-bold text-primary">Nuestros Productos</h1>
      
        <div class="row justify-content-center">
          <div class="col-12 col-md-4 py-4">
          	<img src="imagenes/imagen1.jpg" class="img-fluid">
          	<p class="text-primary text-center h3 font-weight-bold">Clamshell</p>
          </div>    
          <div class="col-12 col-md-4 py-4">
          	<img src="imagenes/imagen3.jpg" class="img-fluid">
          	<p class="text-primary text-center h4 font-weight-bold">Plastic Blister Clamshell</p>
          </div>    
          <div class="col-12 col-md-4 py-4">
            <img src="imagenes/imagen4.jpg" class="img-fluid">
            <p class="text-primary text-center h4 font-weight-bold">Charolas de Plástico</p>
          </div>    

           <div class="col-12 py-4">
            <a href="papeleras.php" class="btn btn-primary btn-lg">Siga viendo más de nuestros productos</a>
          </div>
        </div><!--  fin de row -->
        
      </div>
   </section>

   <section class="pt-5">
        <div class="container py-3 py-sm-0">
          <h1 class="text-center text-primary font-weight-bold">Línea de Productos</h1>
          <!-- Swiper -->
          <div class="swiper-container d_asistencia" id="desarrollo_asistencia4">
            <div class="swiper-wrapper" id="d_asistencia_tamaño">
              <div class="swiper-slide">
                <img src="imagenes/swiper/imagen1.jpg" class="img-fluid">
                <h4 class="text-secondary py-2 font-weight-bold">Charolas de Plástico</h4>
              </div>
              <div class="swiper-slide">
                <img src="imagenes/swiper/imagen2.jpg" class="img-fluid">
                <h4 class="text-secondary py-2 font-weight-bold">Clamshell</h4>
              </div>
              <div class="swiper-slide">
                <img src="imagenes/swiper/imagen3.jpg" class="img-fluid">
                <h4 class="text-secondary py-2 font-weight-bold">Plastic Blister Clamshell</h4>
              </div>
              <div class="swiper-slide">
                <img src="imagenes/swiper/imagen4.jpg" class="img-fluid">
                <h4 class="text-secondary py-2 font-weight-bold">Diseño</h4>
              </div>
               <div class="swiper-slide">
                <img src="imagenes/swiper/imagen5.jpg" class="img-fluid">
                <h4 class="text-secondary py-2 font-weight-bold">Cajas PVC</h4>
              </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </section>


       <section id="team"  id="nuestra-app" class="bg-secondary py-5 text-white text-center text-md-left jarallax" data-jarallax data-speed="0.7">
         <picture class="jarallax-img">
          <source media="(min-width:1200px)" srcset="imagenes/servicios_xl.jpg">
          <source media="(min-width:768px)" srcset="imagenes/servicios_md.jpg">
          <img srcset="imagenes/servicios_sm.jpg" alt="Fondo nuestra App" class="w-100">
        </picture>
         <div class="container-fluid my-3 py-5 text-center">
           <div class="row mb-5">
             <div class="col-12">
               <h1 class="display-2 text-light font-weight-bold">SERVICIOS</h1>
             </div>
           </div>

           <div class="row">
             <div class="col-lg-3 col-md-6">
               <div class="card card1">
                 <div class="card-body">
                   <img src="imagenes/blister.jpg" alt="" class="img-fluid w-50 mb-3">
                   <h5 class="font-weight-bold text-light">DISEÑO</h5>
                   <p class="text-justify text-light">Nuestra experiencia con el Termoformado nos ha llevado incluir en nuestra empresa varias estaciones de diseño con el software más avanzado, lo cual permite reducir tiempos en los desarrollos de proyectos y logrando tener una fiabilidad total en el diseño y posterior fabricación del molde y suajes, o cualquier herramental necesario.</p>
                 </div>
               </div>
             </div>

             <div class="col-lg-3 col-md-6 mt-3 mt-md-0 mt-lg-0">
               <div class="card card2">
                 <div class="card-body">
                   <img src="imagenes/charolas1.jpg" alt="" class="img-fluid w-50 mb-3">
                   <h5 class="font-weight-bold text-light">TERMOFORMADO</h5>
                   <p class="text-justify text-light">El proceso en que se realizan es el Termoformado en el que se moldea el envase de plástico, dotándolo de una gran resistencia, firmeza, durabilidad. </p>
                 </div>
               </div>
             </div>

             <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
               <div class="card card3">
                 <div class="card-body">
                   <img src="imagenes/clamshell2.jpg" alt="" class="img-fluid w-50 mb-3">
                   <h5 class="font-weight-bold text-light">TERMOFORMADO CONTINUO</h5>
                   <p class="text-justify text-light">TERMOFORMADOS INDUSTRIALES DE TOLUCA cuenta con una máquina de termoformado en continuo para productos plásticos a gran escala</p>
                 </div>
               </div>
             </div>

             <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
               <div class="card card4">
                 <div class="card-body">
                   <img src="imagenes/pvc.jpg" alt="" class="img-fluid w-50 mb-3">
                   <h5 class="font-weight-bold text-light">PERCHAS</h5>
                   <p class="text-justify text-light">Fabricamos rollos de perchas adheribles con orificio o sin él, están diseñadas para colgar cualquier artículo y / o producto, son fabricadas en Pvc de alta resistencia y un excelente adhesivo, para adaptarse a diversos tipos de ganchos y distribuir mejor el peso, podemos fabricarlas conforme a diseño y / o necesidad.</p>
                 </div>
               </div>
             </div>



             <div class="row justify-content-center mt-3">
              <div class="col-12 col-md-6 pt-4 pt-lg-0 text-center text-lg-left">
                 <div class="card card5">
                   <div class="card-body">
                      <h5 class="font-weight-bold text-light">FABRICACION DE CAJAS DE PLASTICO TRANSPARENTE Y BLISTERS (ALTA FRECUENCIA)</h5>
                      <p class="text-justify text-light">
                       Cajas transparentes <br>
                        Somos fabricantes de cajas transparentes plegables o también llamadas cajas de acetato transparente en varios modelos y tamaños, lo que permite su almacenaje en poco espacio. Las cajas de plástico transparentes o coloquialmente llamadas de acetato o Pvc son una opción ideal para empaquetar pequeños artículos permitiendo al comprador ver el producto que va a adquirir y sus características. <br>
                        También fabricamos Cajas de "Base y Tapa" y   Blíster los cuales se pueden personalizar 
                      </p>
                    </div>
                  </div>
              </div>
           </div>
           </div>
         </div>
       </section>


  <?php
   include 'templates/footer.php';
  ?>


 