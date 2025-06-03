window.sr = ScrollReveal();

sr.reveal('.btnDigitales', {
		duration: 2000, //tiempo
		//delay:1500,
		origin: 'right', //origen
		distance: '200px' //distancia


	}); 
sr.reveal('.btnDigitales2', {
		duration: 2000, //tiempo
		delay:350,
		origin: 'left', //origen
		distance: '100px' //distancia


	}); 
sr.reveal('.imagenInicio', {
		duration: 2000, //tiempo
		delay:00,
		origin: 'right', //origen
		scale: 0.10,
		distance: '-0' //distancia


	}); 
sr.reveal('.imagenInicio2', {
		duration: 2000, //tiempo
		delay:350,
		origin: 'right', //origen
		scale: 0.10,
		distance: '-0' //distancia


	}); 
sr.reveal('.inicio1', {
		duration: 1000, //tiempo
		origin: 'top', //origen
		distance: '100px', //distancia


	}); 
sr.reveal('.tituloInvitaciones', {
		duration: 2000, //tiempo
		//delay:1500,
		origin: 'top', //origen
		scale: 0.10,
		distance: '-0' //distancia


	}); 
sr.reveal('.tituloInvitaciones2', {
		duration: 2500, //tiempo
		delay:100,
		origin: 'top', //origen
		scale: 0.10,
		distance: '-0' //distancia


	}); 
sr.reveal('.cel', {
		duration: 2000, //tiempo
		//delay:1500,
		origin: 'top', //origen
		scale: 0.10,
		distance: '-0' //distancia


	}); 
sr.reveal('.precios2', {
		duration: 2000, //tiempo
		//delay:1500,
		origin: 'top', //origen
		scale: 0.10,
		distance: '-0' //distancia


	}); 
sr.reveal('.hagamos', {
		duration: 2000, //tiempo
		//delay:1500,
		origin: 'top', //origen
		scale: 0.10,
		distance: '-0' //distancia


	}); 
	sr.reveal('.logo', {
		duration: 1500, //tiempo
		origin: 'bottom', //origen
		distance: '-50px', //distancia
		


	}); 

	

	sr.reveal('.lleva', {
		duration: 2000, //tiempo
		origin: 'left', //origen
		distance: '100px', //distancia
		

	});

	sr.reveal('.titulo', {
		duration: 1500, //tiempo
		origin: 'top', //origen
		distance: '-100px', //distancia
		

	});
		sr.reveal('.tituloSistemaControl', {
		duration: 1500, //tiempo
		origin: 'top', //origen
		distance: '-100px', //distancia
		

	});
sr.reveal('.celular', {
		duration: 1500, //tiempo
		origin: 'left', //origen
		distance: '-100px', //distancia
		

	});
sr.reveal('.derecha', {
		duration: 2000, //tiempo
		origin: 'right', //origen
		distance: '-100px', //distancia
		

	});
sr.reveal('.izquierda', {
		duration: 2000, //tiempo
		origin: 'left', //origen
		distance: '-100px', //distancia
		

	});
sr.reveal('.izquierda2', {
		duration: 2000, //tiempo
		origin: 'bottom', //origen
		distance: '100px', //distancia
		

	});

sr.reveal('.contacto2', {
		duration: 2000, //tiempo
		origin: 'left', //origen
		distance: '100px', //distancia
		

	});
sr.reveal('.contacto3', {
		duration: 2000, //tiempo
		origin: 'bottom', //origen
		distance: '100px', //distancia
		

	});


	sr.reveal('.float', {
		duration: 1500, //tiempo
		delay:2000,
		origin: 'top', //origen
		distance: '-100px', //distancia
		

	}); 
	sr.reveal('.home', {
		duration: 1500, //tiempo
		delay:2500,
		origin: 'left', //origen
		distance: '-100px', //distancia
		

	}); 


	

$(document).ready(function () {
  $(".nav-link").on('click', function (event) {

    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function () {


      });
    }
  });
});

$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});

$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll2').fadeIn(); 
        } else { 
            $('#scroll2').fadeOut(); 
        } 
    }); 
    $('#scroll2').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});


 $(document).ready(function () {
  $(".button").on('click', function (event) {

    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function () {


      });
    }
  });
});

 $("#pills-contact-tab2").on("click", function(){
  	$("#pills-home-tab").css("color", "#3b414a")
  	$("#pills-profile-tab").css("color", "#3b414a")
  	$("#pills-contact-tab").css("color", "#3b414a")
  	$("#pills-contact-tab2").css("color", "#9B7A07")
    	
});

	$("#pills-profile-tab").on("click", function(){
  	$("#pills-home-tab").css("color", "#3b414a")
  	$("#pills-profile-tab").css("color", "#9B7A07")
  	$("#pills-contact-tab").css("color", "#3b414a")
  	$("#pills-contact-tab2").css("color", "#3b414a")
    	
});
  
	$("#pills-contact-tab").on("click", function(){
  	$("#pills-home-tab").css("color", "#3b414a")
  	$("#pills-profile-tab").css("color", "#3b414a")
  	$("#pills-contact-tab").css("color", "#9B7A07")
  	$("#pills-contact-tab2").css("color", "#3b414a")
    	
});
  
$("#pills-home-tab").on("click", function(){
  	$(this).css("color", "#9B7A07")
  	$("#pills-profile-tab").css("color", "#3b414a")
  	$("#pills-contact-tab").css("color", "#3b414a")
  	$("#pills-contact-tab2").css("color", "#3b414a")
    	
});



$(document).ready(function(){
	$('.menu li:has(ul)').click(function(e){
		e.preventDefault();

		if ($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
		} else {
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}
	});



	
});