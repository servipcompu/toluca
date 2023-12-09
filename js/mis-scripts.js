$(function(){

	/*----------------------------------------------------------------
	1.FUNCIONES PARA EL MENU PRINCIPAL
	-----------------------------------------------------------------*/

	/*Insertar y quita la clase ".icono-cerrar" al boton del menu*/
	$('#menu-navegacion .navbar-toggler').click(function(){
		$('.boton-menu').toggleClass('icono-cerrar');
	});

	/*Al hacer click en un enlace del menu principal, se eliminara la clase ".icono-cerrar"*/
	$('#menu-navegacion .navbar-nav a').click(function(){
		/*1)Quita la clase ".icono-cerrar"*/
		$('.boton-menu').removeClass('icono-cerrar');

		/*2) Contraemos el menu*/
		$('#menu-navegacion .navbar-collapse').collapse('hide');
	});

	/*----------------------------------------------------------------
	2.INICIANDO SWIPER
	-----------------------------------------------------------------*/
	 var swiper = new Swiper('#animacion',{

	 	/*Botones de navegacion*/
	 	navigation: {
		    nextEl: '.swiper-button-next',
		    prevEl: '.swiper-button-prev',
	  	},

	  	/*Botones de Paginacion*/
		pagination: {
		    el: '.swiper-pagination',
		    type: 'bullets',
		    clickable:true
		 },
		  speed:500,
		  effect:'fade',
		  grabCursor:true,
		  loop:true,
		  autoplay:{
		  	delay:3000,
		  },

		 keyboard: {
		   enabled: true,
		   onlyInViewport: true,
  		}

	 });


	 /*----------------------------------------------------------------
	3.INICIANDO VENOBOX
	-----------------------------------------------------------------*/
	 $('.venobox-video').venobox({
	 	autoplay:true,
	 	bgcolor:'rgba(255,255,255,0.4)',
	 	border:'5px',
	 	closeColor:'#fff',
	 	overlayColor:'rgba(12,60,22,0.83)',
	 	spinner:'three-bounce'
	 }); 


	/*----------------------------------------------------------------
	4.INICIANDO jquery.counterup
	-----------------------------------------------------------------*/
	$('.counter').counterUp();

	/*----------------------------------------------------------------
	5.INICIANDO "picker.date.js"
	-----------------------------------------------------------------*/
	$('.datepicker').pickadate({
		monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
	    monthsShort: [ 'ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic' ],
	    weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado' ],
	    weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb' ],
	    today: 'Hoy',
	    clear: 'Limpiar',
	    close: 'Cerrar',
	    labelMonthNext: 'Siguiente mes',
		labelMonthPrev: 'Mes anterior',
		labelMonthSelect: 'Seleccione un mes',
		labelYearSelect: 'Seleccione un año',
	    firstDay: 1,
	    format: 'dddd, dd !de mmmm !de yyyy',
	    formatSubmit: 'dd/mm/yyyy',
	    selectYears: true,
 		selectMonths: true,
 		min: true,
 		max: 30,
 		onStart:function()
 		{
 			var date=new Date();
 			this.set('select',[date.getFullYear(), date.getMonth(), date.getDate()]);
 		}
	});


	/*----------------------------------------------------------------
	6.INICIANDO "picker.time.js"
	-----------------------------------------------------------------*/
	$('.timepicker').pickatime({
		clear: 'Borrar',
		format: 'hh:i A',
		interval: 60,
		min: [8, 0],
  		max: [18, 0]
	});

	/*----------------------------------------------------------------
	7.INICIANDO "rasley.js"
	-----------------------------------------------------------------*/
	$('#mi-formulario').parsley({
		errorClass: 'is-invalid text-danger',
  		successClass: 'is-valid',
  		errorsWrapper: '<ul class="list-unstyled text-danger mb-0 pt-2 small"></ul>',
  		errorTemplate: '<li></li>',
  		trigger:'change',
  		triggerAfterFailure:'change'
	});

	/*----------------------------------------------------------------
	8.INICIANDO "Stickit.js"
	-----------------------------------------------------------------*/
	$('#menu-navegacion').stickit({
		className:'menu-fijo'
	});

	/*----------------------------------------------------------------
	8.INICIANDO "page-scroll-to-id"
	-----------------------------------------------------------------*/

	$('#menu-principal a').mPageScroll2id({
		offset: 50,
		highlightClass:'active'
	});



	/*[ Back to top ]
    ===========================================================*/
    var windowH = $(window).height()/2;

    $(window).on('scroll',function(){
        if ($(this).scrollTop() > windowH) {
            $("#myBtn").css('display','flex');
        } else {
            $("#myBtn").css('display','none');
        }
    });

    $('#myBtn').on("click", function(){
        $('html, body').animate({scrollTop: 0}, 300); /*500 le cambiamos a 0*/
    });










    /*--------------------------
	/*Configuracion de Mmenu.js*/
	/*---------------------------*/
	var $menu=$("#menu-principal1").mmenu({
		// OPCIONES DE CONFIGURACION
        navbar: {
            title: false
        },
		/*Configurando el Core*/

		/*Integracion con bootstrap*/
		 wrappers: ["bootstrap"],
		/*Efecto deslizante para sub-enlaces*/
		slidingSubmenus:true,
		/*Quitar la barra superior*/
		
		/*Configurando extensiones*/
		"extensions": [
            "position-left",
            "theme-white",
            "border-full",
            "fx-menu-slide",
            "fx-panels-slide-up",
            "fx-listitems-slide",
            "pagedim-black",
            "shadow-page",
            "shadow-panels"
        ],

		/*Configurando los Add-ons*/
		 "counters": true,
		/* iconbar: {
                 /"use": true,
                  "top": [
                     "<a href='#/'><i class='fa fa-home'></i></a>",
                     "<a href='#/'><i class='fa fa-user'></i></a>"
                  ],
                  "bottom": [
                     "<a href='#/'><i class='fab fa-twitter'></i></a>",
                     "<a href='#/'><i class='fab fa-facebook'></i></a>",
                     "<a href='#/'><i class='fab fa-linkedin'></i></a>"
                  ]


               }*/
         navbars: [
                  {
                     position: "top",
                     content: ['<a href="index" class="d-block w-10 text-center"><img src="imagenes/logo.svg" alt="logo del sitio" width="80"></a>']
                  }
         ]
	});


		/*----------------------------------------------
	2.Configuracion del boton buscar
	-----------------------------------------------*/
	$('.btn-buscar').click(function(){
		$('.btn-buscar').toggleClass('boton-buscar-activo');
	});


	/*----------------------------------------------
	3.Configuracion de Juggler.js
	-----------------------------------------------*/
	Juggler.init();




	/*-----------------------------------------------------------
    6. Configuración de Swiper para "#slideCaracteristicas"
   -------------------------------------------------------------*/

    var navCaracteristicas = new Swiper('.navCaracteristicas', {
        slidesPerView: 3,
        watchSlidesProgress: true
    });
    var slideCaracteristicas = new Swiper('.slideCaracteristicas', {
        loop: true,
        speed: 300,
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },

        /*Botones de paginaciÃ³n */
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
		  speed:1300,
		  grabCursor:true,
		  loop:true,
		  autoplay:{
		  	delay:3000,
		  },
        /*Botones de navegaciÃ³n */
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: navCaracteristicas
        }

    });
    /*-----------------------------------------------------------
    6. Configuración de Swiper para "#slideFunciones"
   -------------------------------------------------------------*/

    var navFunciones = new Swiper('.navFunciones', {
        slidesPerView: 3,
        watchSlidesProgress: true
    });
    var slideFunciones = new Swiper('.slideFunciones', {
        loop: true,
        speed: 300,
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },

        /*Botones de paginaciÃ³n */
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
		  speed:500,
		  grabCursor:true,
		  loop:true,
		  autoplay:{
		  	delay:3000,
		  },

        /*Botones de navegaciÃ³n */
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: navFunciones
        }

    });


    /*Swiperr desarrollosw-*/
    var swiper = new Swiper('.dsw', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
		  speed:500,
		  grabCursor:true,
		  loop:true,
		  autoplay:{
		  	delay:3000,
		  },
    });


    //Swiper Diseño_Paginas//
     var swiper = new Swiper('.diseno', {
      	loop: true,
        speed: 300,
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },

        /*Botones de paginaciÃ³n */
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
		  speed:500,
		  grabCursor:true,
		  loop:true,
		  autoplay:{
		  	delay:3000,
		  },
    });

      //Swiper soporte//
     var swiper = new Swiper('.soporte', {
        loop: true,
        speed: 300,
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },

        /*Botones de paginaciÃ³n */
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
      speed:1000,
      grabCursor:true,
      loop:true,
      autoplay:{
        delay:3000,
      },
    });


      //Swiper Desarrollo_asistencia//
     var swiper = new Swiper('.dsw_asistencia', {
      	 effect: 'cube',
     grabCursor: true,
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      pagination: {
        el: '.swiper-pagination',
        
      },
      speed:1000,
		  grabCursor:true,
		  loop:true,
		  autoplay:{
		  	delay:3000,
		  },
    });


     var swiper = new Swiper('.d_asistencia', {
     slidesPerView: 1,
      spaceBetween: 10,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      speed:500,
		  grabCursor:true,
		  loop:true,
		  autoplay:{
		  	delay:3000,
	},
      breakpoints: {
        768: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        1199: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        1400: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
      },
      /*Botones de navegaciÃ³n */
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
	

   /*-----------------------------------------------------------
     Configuración de hc-sticky
   -------------------------------------------------------------*/
   var Sticky = new hcSticky('#navegacion', {
  		mobileFirst:true,
  		responsive:{
  			0:{
  				disable:true,
  			},
  			992:{
  				disable:false,
  				stickTo:"body",
  				stickyClass:"encabezadofijo"
  			}
  		}
   });




   /*APPY_Asociados*/
   var swiper = new Swiper('.apyl1', {
      effect: 'flip',
      grabCursor: true,
      pagination: {
        el: '.swiper-pagination',
      },
      speed:500,
      grabCursor:true,
      loop:true,
      autoplay:{
        delay:3000,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

   

})


	