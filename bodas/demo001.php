
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bodas/demo001.css">
    <script src="js/scrollreveal.js"></script>
    <script src="https://kit.fontawesome.com/9b95a5c077.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Atma:wght@300&family=Cormorant:wght@300&family=Galada&family=Katibeh&family=Meera+Inimai&family=Pinyon+Script&family=Rouge+Script&family=Waterfall&display=swap" rel="stylesheet">
   
<link href="https://fonts.googleapis.com/css2?family=Adamina&family=Anek+Kannada:wght@500&family=Cormorant+Garamond:wght@300;500&family=Crete+Round&family=Dancing+Script:wght@700&family=La+Belle+Aurore&family=Maitree:wght@500&family=Nunito+Sans&family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Alata&family=Archivo&family=Fredoka+One&family=Headland+One&family=Paytone+One&family=Questrial&family=Qwitcher+Grypen:wght@700&family=Righteous&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Arizonia&family=Cinzel+Decorative&family=Cormorant+Garamond:wght@500&family=Dancing+Script&family=EB+Garamond&family=Great+Vibes&family=Noto+Sans+Tagbanwa&family=Noto+Serif+Khojki:wght@700&family=Open+Sans:wght@300&family=Pacifico&family=Tangerine&display=swap" rel="stylesheet">

    <script type='text/javascript'>
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

    $('a[href^="#"]').click(function() {
    var destino = $(this.hash);
    if (destino.length == 0) {
      destino = $('a[name="' + this.hash.substr(1) + '"]');
    }
    if (destino.length == 0) {
      destino = $('html');
    }
    $('html, body').animate({ scrollTop: destino.offset().top }, 500);
    return false;
  });

 $('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});
   
});


</script>
<script>
    function PlayAudio(){
        document.getElementById("musica1").play();
    }
</script>
    <title>Eduardo & Mariana - ¡Nos vamos a casar!</title>
    <link rel="shortcut icon" href="../img/CODIGO LOGOTIPO.png"/>
</head>
<!--<body>
    <div class="row justify-content-center">
    <h1 class='desactivado col-11 text-center' ><li class='mr-1 far fa-times-circle'></li>DESACTIVADO TEMPORALMENTE<li class='ml-1 far fa-tired'></li>
        </h1> 
</div>-->
<body translate="no">
<!--<div class="loader_bg">
    <div class="loader"><img class="col-12 col-lg-9" src="img/xv.png"></div>
     <div class="progress">
        <div class="loading-bar indeterminate" ng-style="{'background-color': view.code.color1 || view.color1}"></div>
    </div>
</div>-->


<div class="portada col-12" style="background-size: cover ; background-image: url(../img/bodasimg/portada.jpg);  position: relative;"  >
    
                    <div class="row justify-content-center">

                        <h4 class='nuestraBoda col-11 col-lg-12 text-center ml-3'>NOS VAMOS A CASAR </h4>
                        <div class="text-center "> 
        <img class="text-center col-7 col-md-7 ml-3 mt-0 mb-4" src="../img/bodasimg/ornamentablanca.png" > 
    </div>   <div class="container">
                         <h5 class='nombres1 col-lg-12 text-center' >Eduardo</h5>  
                         <h5 class='and1 col-lg-12 text-center' >&</h5> 
                         <h5 class='nombres2 col-lg-12 text-center' >Mariana</h5> 
                     </div>
<div class="container mt-0">
    <div class="row justify-content-center ml-3">
<div class="playpause mb-5 ml-4" onclick="PlayAudio()" >
    <div class="button col-md-5"></div>

</div>  
 <audio class="col-md-3" id="musica1" volume="80" loop> 
      <source src="musica.mp3" type="audio/mpeg">
  </audio>
</div>
</div>


            </div>

        </div>


<h5 class='dondeyCuando col-12 col-lg-12 mb-0 mt-5 text-center' >Los Novios</h5> 
        <div class="text-center "> 
        <img class="text-center col-7 col-lg-3 mt-0 mb-0" src="../img/bodasimg/ornamenta.png" > 
    </div>
 <!-- CARRUSEL-->
 <img class="col-12 col-md-5 mt-4 imagen1 justify-content-center" src="../img/bodasimg/1.png"  >
 <div class="container collage col-10 col-md-4 ">  
            <img class="imagen2 " src="../img/bodasimg/2.jpg" alt="">
</div>
 <img class="imagen3 col-12 col-md-5 mt-5 mb-0 text-md-right" src="../img/bodasimg/3.jpg">
 <div class="text-center "> 
        <img class="text-center col-7 col-lg-3 mt-5 mb-0" src="../img/bodasimg/ornamenta.png" > 
    </div>
<div class="container col-12 mt-0 mb-5">  
        <div class="justify-content-center"> 
        <h5 class='porqueformas col-lg-12 mt-3 text-center' >CON LA BENDICIÓN DE NUESTROS PADRES:</h5>  
        <h5 class='porqueformas col-lg-12 mt-5 text-center' >PADRES DE LA NOVIA..</h5> 
        <h6 class='nompadres col-12 col-lg-12 mt-5 text-center' >Omar E. Garcia Aviña</h6>
        <h6 class='and col-12 col-lg-12 text-center'  >&</h6> 
        <h6 class='nompadres col-12 col-lg-12 mt-0 text-center' >Maria G. Antonieta Graciano</h6> 
        <h5 class='porqueformas col-lg-12 mt-5 text-center' >PADRES DEL NOVIO...</h5>  
        <h6 class='nompadres col-12 col-lg-12 mt-5 text-center' >Eduardo D. Vazquez Saucedo</h6>
        <h6 class='and col-12 col-lg-12 text-center'  >&</h6> 
        <h6 class='nompadres col-12 col-lg-12 mt-0 text-center' >Julia M. Avalos Barrios</h6>
        
        <p class='tespero col-12 col-lg-12 mt-5 mb-4 text-center' >¡Tenemos del honor de invitarles a la celebración de nuestro Enlace Matrimonial!</p> 
          <h6 class='col-12 col-lg-12 mt-3 mb-5 text-center' style="color:#9B7A07;">_______________________</h6>


    </div></div>




  
<!--<h3 class='estasinvitado col-12 col-lg-12 mt-0 mb-2 text-center'>¡Estás Invitado!</h3> -->
<br><div class="col-12" style="background-size: cover;  background-image: url(../img/bodasimg/cuando.jpg); "><br>   
        <h5 class='dondeyCuando col-12 col-lg-12 mt-2 mb-0 text-center text-white' >¿Cuando?</h5> 
        <div class="text-center "> 
        <img class="text-center col-7 col-lg-3 mt-0 mb-4 ornamenta" src="../img/bodasimg/ornamentablanca.png" > 
    </div>
    <div class="row justify-content-left">
                        <h5 class='mes col-5 col-lg-5  ml-0 text-left' >Diciembre</h5> 
                </div>
        <div class="container col-12 mt-2 mb-0">  
                <div class="justify-content-center">
                        <h5 class='dia col-lg-12 text-center' >27</h5> 
                </div>

        </div>
        <div class="row justify-content-right">
                        <h5 class='año col-12 col-lg-5 ml-2 text-right' >2023</h5> 
                </div>
        <p class='textodondeycuando col-12 col-lg-12 mt-3 mb- text-center text-white' >Queremos que seas parte de este momento tan importante.</p> 
        <p class='col-12 col-lg-12 mt-3 mb- text-center' style="font-size:20px;  font-family: 'Cormorant Garamond', serif; color:white;">SOLO FALTAN...</p> 
        <div class="col-12 text-center mb-0" id="cuenta"></div> 
        <br><br>
        
</div>

<div class="invitado col-12 mb-0 mt-0"> 
    
        <br><br>
        <h5 class='dondeyCuando col-12 col-lg-12 mt-0 mb-0 text-center' >¿Dónde?</h5> 
        <div class="text-center "> 
        <img class="text-center col-7 col-lg-3 mt-0 mb-4" src="../img/bodasimg/ornamenta.png" > 
    </div>

         <div class="container col-12 col-md-8 mt-2 text-center mb-4">  
        <div class="justify-content-center">    
        <p style="font-size: 120px;"><i class="fas fa-church"></i></p>  
        <h5 class='dondeycuandotitulo col-12 col-lg-12 mt-3 text-center' ><b>CEREMONIA RELIGIOSA</b></h5> 
        <p class='hora col-12 col-lg-12 mt-4 text-center' ><b>18:00 hrs.</b></p>
        <h6 class='lugar col-12 col-lg-12 mt-3 text-center' >Santuario de Guadalupe</h6> 
        <p class='textodondeycuando col-12 col-lg-12 mt-4 mb-4 text-center' >Prolongacion S/N, Zona Centro, 34000 Durango</p>  
   
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.7338523250837!2d-104.68097818578308!3d24.040448783552495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bc83685a5e403%3A0xd63146324039d752!2sSantuario%20de%20Guadalupe!5e0!3m2!1ses!2smx!4v1676954207824!5m2!1ses!2smx" width="100%" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mb-4 mapas"></iframe>

    <a href="https://maps.app.goo.gl/rws3DJR4YkXdLhk77" class="btn btn-dark col-8 mb-5"><i class="fas fa-location-arrow"></i> COMO LLEGAR</a>  

    </div></div>

    <div class="container col-12 col-md-8 mt-2  text-center mb-5">  
        <div class="justify-content-center"> 
              
        <p style="font-size: 120px;"><i class=" fas fa-glass-cheers"></i></p> 
        <h5 class='dondeycuandotitulo col-12 col-lg-12 mt-3 text-center' ><b>RECEPCIÓN</b></h5>  
        <p class='hora col-12 col-lg-12 mt-4 text-center' ><b>21:00 hrs.</b></p>
           <h6 class='lugar col-12 col-lg-12 mt-3 text-center' >Salón de eventos #212</h6> 
        <p class='textodondeycuando col-12 col-lg-12 mt-3 mb-4 text-center' >C. México 212, Guadalupe, 34220 Durango, Dgo.</p>  

   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.624467652215!2d-104.62549258578298!3d24.044304383403603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb7fc17e819af%3A0x6d4be96fd12d81f!2sSal%C3%B3n%20de%20eventos%20%23212!5e0!3m2!1ses!2smx!4v1676954091600!5m2!1ses!2smx" width="100%" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mb-4 mapas"></iframe>

    <a href="https://maps.app.goo.gl/y12G1tPAnzcepa5v7" class="btn btn-dark col-8 mb-5"><i class="fas fa-location-arrow "></i> COMO LLEGAR</a>  



    </div></div></div>
    <div class="col-12" style="background-size: cover;  background-image: url(../img/bodasimg/mesaregalos.png); "><br><br>
<h5 class='dondeyCuando col-12 col-lg-12 mb-0 mt-2 text-center text-white' >Mesa de Regalos</h5> 
        <div class="text-center "> 
        <img class="text-center col-7 col-lg-3 mt-0 mb-0" src="../img/bodasimg/ornamenta.png" > 
    </div>
    <h2 class="textodondeycuando col-12 col-lg-12 mt-4 text-center text-white" >Tu presencia es obligatoria, el regalo es opcional.</h2>
    <h2 class="textodondeycuando col-12 col-lg-12 mt-3 text-center text-white" >Si deseas tener un detalle con nosotros, preferimos que el presente sea en efectivo, el cual podrás colocar en sobre y depositarlo en un cofre que encontrarás en el salón.</h2>

       <div class="container col-12 justify-content-center mb-5 mt-2">   
         <div class="row justify-content-center align-items-center" > 
         <p style="font-size: 100px; color:white;"><i class="fas far fa-envelope-open text-center"></i></p> 
    </div>  
    <h4 class='dondeyCuando col-12 col-lg-12 mt-5 text-center text-white' style="font-size:70px" >¡Lluvia de sobres!</h4>
    <h6 class='col-12 col-lg-12 mt-2 mb-5 text-center' style="color:white;">_______________________</h6>
    <br>
      </div>
</div>
<div class="invitado col-12"><br>
        <h5 class='dondeyCuando col-12 col-lg-12 text-center' >Código de Vestimenta</h5> 
        <div class="text-center "> 
        <img class="text-center col-7 col-lg-3 mt-0 mb-0" src="../img/bodasimg/ornamenta.png" > 
    </div>
    <h5 class='nosCasamos col-12 col-md-12 mb-4 mt-4 text-center' style="color:black;">ETIQUETA</h5>
        <div class="container col-12 col-md-8 mt-2 vestimenta mb-5">  
        <div class="row justify-content-center"> 
           
        <img class="col-8 col-lg-3 mt-4 justify-content-center" src="../img/bodasimg/vestido.png" > 
        <h5 class='col-12 col-lg-12 mt-3 text-center text-black' style="color:black;  font-family: 'Cormorant Garamond', serif;"><b>MUJERES</b></h5> 
        <h5 class='textodondeycuando col-12 col-lg-12  mb-4 text-center text-black' style="color:black;  font-family: 'Noto Serif Khojki', serif;"  >Vestido Largo.</h5>    
        </div></div>
        <div class="container col-12 col-md-8 mt-2 vestimenta mb-5">  
        <div class="row justify-content-center">     
        <img class="imagen col-8 col-lg-3 mt-4" src="../img/bodasimg/traje.png" > 
        <h5 class='col-12 col-lg-12 mt-3 text-center text-black' style="color:black;  font-family: 'Cormorant Garamond', serif;"><b>HOMBRES</b></h5>  
        <h5 class='textodondeycuando col-12 col-lg-12 mb-4 text-center text-black'style="color:black;  font-family: 'Noto Serif Khojki', serif;" >Traje.</h5>   

    </div></div>
    <br>
</div></div>
 
 <h5 class='dondeyCuando col-12 col-lg-12 text-center text-black mt-4 mb-0' >Itinerario</h5> 
      <div class="text-center "> 
        <img class="text-center col-7 col-lg-3 mt-0 mb-4" src="../img/bodasimg/ornamenta.png" > 
    </div>
<section class="timeline mb-5" style=" background-image: url(../img/bodasimg/demo002/fondo9.jpg);">
  <ul>
    <li>
      <div class="linea">
        <time class="text-white">5:30 PM</time> <p style="font-family: 'Cormorant Garamond', serif; color:white; font-size: 20px;">CAMINATA A LA CEREMONIA RELIGIOSA</p>
        <p class="mt-2 mb-4 text-white"style="font-size: 15px; font-family: 'Noto Serif Khojki', serif;">Desde la casa de la novia ejemplo</p>
      </div>
    </li>
    <li>
      <div class="linea">
        <time class="text-white">6:00 PM</time> <p style="font-family: 'Cormorant Garamond', serif; color:white; font-size: 20px;"> CEREMONIA RELIGIOSA</p>
        <p class="mt-2 mb-4 text-white"style="font-size: 15px; font-family: 'Noto Serif Khojki', serif;">En la iglesia ejemplo</p>
      </div>
    </li>
    <li>
      <div class="linea">
        <time class="text-white">5:30 PM</time> <p style=" font-family: 'Cormorant Garamond', serif; color:white; font-size: 20px;">RECEPCIÓN</p>
        <p class="mt-2 mb-4 text-white"style="font-size: 15px; font-family: 'Noto Serif Khojki', serif;">En el salón ejemplo</p>
      </div>
    </li>
    <li>
      <div class="linea">
        <time class="text-white">5:30 PM</time> <p style=" font-family: 'Cormorant Garamond', serif; color:white; font-size: 20px;">CENA</p>
        <p class="mt-2 mb-4 text-white"style="font-size: 15px; font-family: 'Noto Serif Khojki', serif;">En la terraza del salón ejemplo</p>
      </div>
  </li>
  </ul>
</section>
<br>

 <h5 class='dondeyCuando col-12 col-lg-12 text-center text-black mt-4 mb-0' >¿Donde Hospedarte?</h5> 
      <div class="text-center "> 
        <img class="text-center col-7 col-lg-3 mt-0 mb-4" src="../img/bodasimg/ornamenta.png" > 
    </div>
  <h5 class='nosCasamos col-12 col-md-8 mb-4 mt-3 text-center' style="color:black;">HOTELES</h5>
       
<div id="carouselExampleControls" class="carousel slide mb-5 " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../img/bodasimg/hotel1.png" alt="First slide" height="400px">
        <div class="carousel-caption d-md-block">
        <h3 class="hotel text-white">Fiesta Inn</h3>
        <h7 style="font-family: 'Open Sans', serif;">Precios desde $1,500 por noche en habitación doble.</h7>

        <form class=" logos1 row justify-content-center align-items-center mb-5 mt-3" action="https://maps.app.goo.gl/wTU3BSE5xM1WLhRY9"> 
            <button type="submit" class="btnHoteles text-center align-items-center col-6">Dirección y teléfono</button> 
    </form>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="../img/bodasimg/hotel2.png" alt="Second slide" height="400px">
         <div class="carousel-caption d-md-block">
        <h3 class="hotel text-white">Misión Express</h3>
        <h7 style="font-family: 'Open Sans', serif;">Precios desde $1,200 por noche en habitación doble.</h7>
         <form class=" logos1 row justify-content-center align-items-center mb-5 mt-3" action="https://maps.app.goo.gl/ZZSy9V7F2G3kZdCm6"> 
            <button type="submit" class="btnHoteles text-center align-items-center col-6">Dirección y teléfono</button> 
    </form>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../img/bodasimg/hotel3.png" alt="Third slide" height="400px">
      <div class="carousel-caption d-md-block">
        <h3 class="hotel text-white">Holiday Inn</h3>
        <h7 style="font-family: 'Open Sans', serif;">Precios desde $1,250 por noche en habitación doble.</h7>
         <form class=" logos1 row justify-content-center align-items-center mb-5 mt-3" action="https://maps.app.goo.gl/yeAUWf2jC4CgXg7fA"> 
            <button type="submit" class="btnHoteles text-center align-items-center col-6">Dirección y teléfono</button> 
    </form>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br>



      <h5 class='dondeyCuando col-12 col-lg-12 text-center text-black mt-2 mb-0' >Confirmar asistencia</h5> 
      <div class="text-center "> 
        <img class="text-center col-7 col-lg-3 mt-0 mb-4" src="../img/bodasimg/ornamenta.png" > 
    </div>
        <h2 class="respetuosamente col-12 col-lg-12 mt-2 text-center" >Respetuosamente te pedimos</h2>
         <p class='tespero col-12 col-lg-12 mt-4 mb-5 text-center' >**Los niños se quedan en casa.**</p> 
    <div class="container col-11 col-md-8 mt-2 boletos mt-2 mb-4">  
        <div class="justify-content-center mb-2"><br>
           <h6 class='familiaboleto col-12 col-lg-12 text-center' ><b>Familia</b></h6> 
            <h5 class='apellidos col-12 col-lg-12 mt-3 text-center' >Huizar Graciano</h5>
            <h5 class='invitacionpara col-12 col-lg-12 mt-3 text-center' >Invitación para:</h5>
            <h5 class='numeroPerMes col-12 col-lg-12 mt-2 text-center' >4 </h5>
            <h5 class='numMesa col-12 col-lg-12 mt-4 text-center' >Número de mesa:</h5> 
              <h5 class='numeroPerMes col-12 col-lg-12 mt-2 text-center' >10</h5>
            <p style="font-size: 100px;"><i class=" fas fa-ticket-alt "></i></p>
                <div class="text-center "> 
        <img class="text-center col-7 col-lg-3 mt-0 mb-4" src="../img/bodasimg/ornamenta.png" >
    </div>
        </div>
    </div>
    <h2 class="respetuosamente col-12 col-lg-12 mt-4 text-center" style="color:black;  font-family: 'Noto Serif Khojki', serif;">Respetuosamente te pedimos no invitar a personas que no son parte de los boletos asignados ¡Gracias!</h2><br><br>

</div>

<div class="invitado col-12" >
<h5 class='dondeyCuando col-12 col-lg-12 text-center text-black mt-5 mb-4' >RSVP</h5> 
<h2 class="respetuosamente col-12 col-lg-12 mt-4 text-center" style="color:black;  font-family: 'Noto Serif Khojki', serif;">Nos gustaría pudieras asistir y compartir con nosotros este día tan especial. Te rogamos nos pudieras confirmar tu asistencia antes del <b>01 DE NOVIEMBRE DE 2023.</b></h2>
        <form class="form-register mt-4 col-md-8" name="submit-form">
    <h2 class="formulario col-12 col-lg-12 mt-2 text-left" style="color:black;  font-family: 'Noto Serif Khojki', serif;"><b>Nombre completo del invitado</b></h2>
    <input class="controls" type="text" name="Nombres" id="nombres" placeholder="">
    <h2 class="formulario col-12 col-lg-12 mt-2 text-left" style="color:black;  font-family: 'Noto Serif Khojki', serif;"><b>Teléfono</b></h2>
    <input class="controls" type="number" name="Telefono" id="apellidos" placeholder="">
    <h2 class="formulario col-12 col-lg-12 mt-2 text-left" style="color:black;  font-family: 'Noto Serif Khojki', serif;"><b>¿Podrás asistir? Selecciona una opción</b></h2>

  <select name="¿Asistirá?" id="asistira" class="custom-select" style="color: black; font-size: 20px; height: 45px;" onchange="habilitar(this.value);">
    <option id="Sí" value="Sí">Sí voy a ir.</option>
    <option id="No" value="No">No voy a ir.</option>
  </select>
  <input type="hidden"  name="Contador" value="1">
    <h2 class="formulario col-12 col-lg-12 mt-4 text-left" style="color:black;  font-family: 'Noto Serif Khojki', serif;"><b>De los boletos asignados ¿Cuántos vas a utilizar?</b></h2>
    <select name="Boletos a utilizar" class="custom-select" id="boletos" style="color: black; font-size: 20px; height: 45px;">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
    <h2 class="formulario col-12 col-lg-12 mt-4 text-left" style="color:black;  font-family: 'Noto Serif Khojki', serif;"><b>Mensaje para los novios</b></h2>
    <textarea class="controls" type="text"  style="widht: 100%; height: 100px" name="Mensaje" id="nombres" placeholder=""></textarea>
    
    <div class="row justify-content-center">
    <button type="submit" class="btn btn-dark col-8 mb-5 mt-3 text-center" id="botonForm"><i class="fas fa-envelope" ></i> Enviar</button> 
</div>
  </form> 
<h2 class="respetuosamente col-12 col-lg-12 mt-5 mb-5 text-center" style="color:black;  font-family: 'Noto Serif Khojki', serif;">Recuerda que para accesar al evento deberás mostrar tu invitación e identificación oficial.</b></h2>
  <hr>

<!--<p class='textoasistencia col-12 col-lg-12 mb-3 mt-2 text-center text-black' ><i class="fa fa-whatsapp mr-2"></b></i>CONFIRMAR POR WHATSAPP<p> 
    <div class=" logos1 row justify-content-center align-items-center mb-3"> 
            <a  href="https://wa.me//526182037550?text=Confirmo%20mi%20asistencia." class="btnWhatsNovios text-center align-items-center col-6 ml-2" style=""><b><i class="fa fa-whatsapp mr-2"></b></i> (618) 203 7550</a> 
    </div>
        <div class=" logos1 row justify-content-center align-items-center mb-5"> 
            <a  href="https://wa.me//526182037550?text=Confirmo%20mi%20asistencia." class="btnWhatsNovios text-center align-items-center col-6 ml-2" style=""><b><i class="fa fa-whatsapp mr-2"></b></i> (618) 203 7550</a> 
    </div>

<p class='textoasistencia col-12 col-lg-12 mb-2 mt-2 text-center text-black' ><i class="fas fa-phone-alt mr-2"></i>CONFIRMAR POR LLAMADA<p> 
   <div class=" logos1 row justify-content-center align-items-center mb-3"> 
            <a  href="tel:6182037550" class="btnWhatsNovios text-center align-items-center col-6 ml-2" style=""><i class="fas fa-phone-alt mr-2"></i>  (618) 203 7550</a> 
    </div>
        <div class=" logos1 row justify-content-center align-items-center mb-5"> 
            <a  href="tel:6182037550" class="btnWhatsNovios text-center align-items-center col-6 ml-2" style=""><i class="fas fa-phone-alt mr-2"></i> (618) 203 7550</a> 
    </div>-->

 <p class='textoasistencia col-12 col-lg-12 mb-4 mt-5 text-center text-black' >¿Dudas sobre nuestro evento? Puedes pedir información a través de nuesto chat de WhatsApp.<p> 
         <div class=" logos1 row justify-content-center align-items-center mb-5"> 
            <a  href="https://wa.me//526182037550?text=Confirmo%20mi%20asistencia." class="btnWhats text-center align-items-center col-6" style=""><b><i class="fa fa-whatsapp "></b></i> WhatsApp</a> 
    </div>  <br>
     <h4 class='dondeyCuando col-12 col-lg-12 text-center ' >¡Te Esperamos!</h4> <br><br>

    
</div>
      
  <div class="row justify-content-center" style="background-color: white">
                  
                <img class="col-6 col-lg-3 mb-3 mt-3" src="../img/logotipoConCodigo.png">  
        </div> 
        
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
</a> 

   <div id="particles-js"></div>

    <script src="js/particles.min.js"></script>
    <script>
        particlesJS(
            {
  "particles": {
    "number": {
      "value": 160,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#9b7a07"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 1,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 1,
        "opacity_min": 0,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 4,
        "size_min": 0.3,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 1,
      "direction": "none",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 600
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "bubble"
      },
      "onclick": {
        "enable": false,
        "mode": "repulse"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 250,
        "size": 0,
        "duration": 2,
        "opacity": 0,
        "speed": 3
      },
      "repulse": {
        "distance": 400,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}
               )
    </script>



    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/simplyCountdown.min.js"></script>
    <script src="js/countdown.js"></script>
  <script src="//maps.googleapis.com/maps/api/js"></script>
  <script src="js/script.js"></script>
  <script>

         let comprobar = "1";
        let scriptURL = 'https://script.google.com/macros/s/AKfycbzrv50X2VPBwqzKJfiVaDCBZ5lhD7z7EoKIp3H9w2stbTVH5dSI5VanIRTFS305mg4Hxg/exec';
        let form = document.forms['submit-form'];

        form.addEventListener('submit', e => {
            e.preventDefault();
            fetch(scriptURL, {
                method: 'POST',
                body: new FormData(form)

            })
            .then((res) => {
                
                console.log(res);
                if(res.status === 200){

                   const myButton = document.getElementById('botonForm');
    myButton.disabled = true;
    myButton.style.opacity = 0.7;
    myButton.textContent = 'Enviando espere por favor...';
 
    //simulación de espera para ejecución de un proceso
    setTimeout(function() {
        console.log('Espera por favor...');
        form.reset();
        alert('Datos enviados correctamente.');
                     
                       
        myButton.textContent = 'Enviado';
        myButton.style.opacity = 0.1;
        myButton.disabled = true;
    }, 3500);
                    
                     
document.getElementById("boletos").disabled=true;
                      document.getElementById("nombres").disabled=true;
                       document.getElementById("telefono").disabled=true;
                        document.getElementById("asistira").disabled=true;
                         document.getElementById("boletos").disabled=true;
                         document.getElementById("mensaje").disabled=true;
                          document.getElementById("botonForm").disabled=true;
    
                }
            })
            .catch((error) => {
                console.error('Error', error.message)
            });
        });
function habilitar(value)
        {
            if(value=="Sí" || value==true)
            {
                // habilitamos
                document.getElementById("boletos").disabled=false;
            }else if(value=="No" || value==false){
                // deshabilitamos
                
                document.getElementById("boletos").disabled=true;
                 $(document).ready(function () {

                $('.asistira" option:2').text("0");

            });
            }
        }

        (function () {
  "use strict";

  // define variables
  var items = document.querySelectorAll(".timeline li");

  // check if an element is in viewport
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }

  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);
})();

    </script>

</body>
</html>