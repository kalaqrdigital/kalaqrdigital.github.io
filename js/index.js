window.sr = ScrollReveal();

sr.reveal('.tituloInvitaciones', {
		duration: 2000, //tiempo
		//delay:1500,
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
	sr.reveal('.logo', {
		duration: 1500, //tiempo
		origin: 'bottom', //origen
		distance: '-50px', //distancia
		


	}); 

	

	sr.reveal('.lleva', {
		duration: 1500, //tiempo
		origin: 'right', //origen
		distance: '-100px', //distancia
		

	});

	sr.reveal('.titulo', {
		duration: 1500, //tiempo
		origin: 'top', //origen
		distance: '-100px', //distancia
		

	});

sr.reveal('.piepagina', {
		duration: 1000, //tiempo
		delay:500,
		origin: 'left', //origen
		distance: '100px', //distancia
		

	}); 

	sr.reveal('.float', {
		duration: 1500, //tiempo
		origin: 'top', //origen
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

 $(document).ready(function () {
  $(".btnCatalogo").on('click', function (event) {

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