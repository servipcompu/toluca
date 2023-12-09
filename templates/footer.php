    
      <!-- <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

     
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="624418548191552"
        theme_color="#d47010"
        logged_in_greeting="Hola Bienvenidos, como podemos ayudarte?"
        logged_out_greeting="Hola Bienvenidos, como podemos ayudarte?">
      </div> -->


     <!--Seccion "#pie-de-pagina"-->
      <footer id="pie-de-pagina" class="text-light text-truncate">
        <div class="container">
          <div class="row">
      
          <div class="col-12 d-sm-none d-md-block col-md-3 col-lg-4 footerCategorias mt-4">
            <div class="row">
             <div class="col-12 col-sm-4 col-lg-4 text-center infoContacto text-md-left" id="paginas_footer">
                <h5 class="h4">Termoformados Industrias Toluca</h5>
                <p class="mb-0"><a class="mb-0" href="index.php">Inicio</a>
                <p class="mb-0 "><a class="mb-0" href="nosotros.php">Quienes Somos</a></p>
                <p class="mb-0 "><a class="mb-0" href="contactenos.php">Contáctenos</a></p>
                <hr>
                <h5 class="h4">Oficina Central</h5>
                  <p class="mb-0">Calle de la llama #9 Zona Industrial <br> Tenango del Valle,</p>
                  <p class="mb-0"><i class="fas fa-map-marker-alt mr-2"></i>Estado de México</p> 
              </div>          
            </div>
          </div>

      <!--=====================================
      DATOS CONTACTO
      ======================================-->
      <div class="col-12 col-sm-7 col-md-5 col-lg-4 infoContacto mt-4 text-center text-md-left">
        <h5 class="h4">Dudas e inquietudes, contáctenos en:</h5>
        <p class="mb-0 text-sm-left"><i class="fa fa-phone-square mr-2"></i>+52-1-717-104-1164 | +52-722-115-5998</p>
        <p class="mb-0 text-sm-left"><i class="fa fa-envelope mr-2"></i>jlgonzalez@titza.ws</p> 
        <p class="mb-0 text-sm-left"><i class="fa fa-map-marker mr-2"></i>Estado de México</p>  
          <br>
        </h5>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.795128487559!2d-99.59425168578667!3d19.11664155566303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd927d078638f5%3A0x9b613df39034d36!2sFalco%20Latinoamericana%2C%20S.A.%20De%20C.V.!5e0!3m2!1ses!2spe!4v1597633082540!5m2!1ses!2spe" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <!--=====================================
      FORMULARIO CONTÁCTENOS
      ======================================-->
      <div class="col-12 col-sm-5 col-md-4 col-lg-4 formContacto mt-4 text-center text-md-left">
        <h5 class="h4 text-">Resuelva su inquietud</h5>
        <form role="form" method="post" onsubmit="return validarContactenos()">
          <div class="form-group">
            <input type="text" id="nombreContactenos" name="nombreContactenos" class="form-control" placeholder="Escriba su nombre" required>
          </div>
          <div class="form-group">
            <input type="email" id="emailContactenos" name="emailContactenos" class=" form-control" placeholder="Escriba su correo electrónico" required> 
          </div>
          <div class="form-group">
            <textarea id="mensajeContactenos" name="mensajeContactenos" class="form-control" placeholder="Escriba su mensaje" rows="5" required></textarea>
          </div>
          <div class="form-group text-md-right">
            <input type="submit" value="Enviar" class="btn btn-dark btn-lg" id="enviar"> 
          </div>
        </form>
      
      </div>
    </div>
        </div>

        <div class="container-fluid final">
          <div class="container">
              <div class="col-12 text-center mb-2 mb-sm-0">
                <h6 class="mb-0">&copy; 2020 Todos los derechos reservados</h6>
              </div> 
          </div>
      </div>

      </footer>


      <!--Boton Desplegable-->
      <div class="btn-back-to-top d-flex" id="myBtn">
        <span class="symbol-btn-back-to-top">
          <i class="fas fa-angle-double-up fa-1x" aria-hidden="true"></i>
        </span>
      </div>



  </div> <!-- Fin de my-page -->


    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/picturefill.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>

    <!-- Carga de "Picker.js" | Crea el selector de fecha y hora-->
    <script src="js/pickadate.js/picker.js"></script>
    <!-- Carga de "picker.date.js" | Crear el selector de fecha-->
    <script src="js/pickadate.js/picker.date.js"></script>
    <!-- Carga de "picker.time.js" | Crear el selector de fecha-->
    <script src="js/pickadate.js/picker.time.js"></script>
     <!-- Carga de "parsley.js" | Crea la validacion de formularios-->
    <script src="js/parsley.min.js"></script>
    <script src="js/parsley.es.js"></script>
     <!-- Carga de "Jquery Stickit.js" | Crean un encabezado fijo en la parte superior de la página-->
    <script src="js/jquery.stickit.min.js"></script>


    <!-- Carga de "page-scroll-to-id" | Crean el efecto de scroll entre los enlaces-->
    <script src="js/jquery.malihu.PageScroll2id.min.js"></script>

   <!-- Carga de "css_browser_selector" | Crean clases para identificar un disp.-->
   <script src="js/css_browser_selector.js"></script>
   <!-- Cargando Mmenu -->
   <script src="js/mmenu.js"></script>
   <!-- Cargando Juggler.js -->
   <script src="js/juggler.min.js"></script>
   <!-- Cargando Juggler.js -->
   <script src="js/hc-sticky.js"></script>

   <!-- Archivo para configurar e iniciar las funciones de los scripts-->
   <script src="js/mis-scripts.js"></script>
  </body>
</html>