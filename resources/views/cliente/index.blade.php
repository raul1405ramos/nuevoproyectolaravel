<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Clients</title>

  <script>
  const parallax = document.getElementById("parallax");

  window.addEventListener("scroll", function () {
    let offset = window.pageYOffset;
    parallax.style.backgroundPositionY = offset * 0.7 + "px";
  });
</script>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand h1" href={{ route('cliente.create')}}>AltaClientes</a>
      <div class="justify-end ">
      <a class="navbar-brand h1" href={{ route('cliente.show')}}>ListarClientes</a>
      <div class="justify-end ">
      </div>
    </div>
 </div>
  </nav>
  <!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            El Hoyo de <br />
            <span class="text-primary">Pinares</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%); font-size: 1.2em;">
          En el corazón de los pinos, cada Hoyo de Pinares es un recordatorio de la fortaleza que se encuentra en la quietud. 
          Enraizados en la serenidad, crecemos hacia la luz, inspirando la calma y la perseverancia. 
          Como los árboles que abrazan la tierra, encontramos nuestra firmeza y elevamos nuestros sueños hacia el cielo
          </p>
        </div>
        <div class="col-lg-4 mb-6 ml-auto-lg-0">
        <img src="{{ asset('images/LOGOTIPO-removebg-preview.png') }}" alt="LOGOTIPO">
</div>
</div>
</div>
</div>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">

<section class = "container-fluid">
  <div id="parallax" class="parallax-item">
  <p style="font-size: 2.5em; color: green; border: 2px solid green; padding: 10px; background-color: white;">📍Bienvenido a Hoyo de Pinares, un Tesoro en Ávila📍</p>
  </div>
  <div class="parallax-item" style="display: flex; justify-content: space-between; align-items: flex-start;">
  <div class= "px-4 py-5 px-md-5 text-center text-lg-start contenedor-texto" style="text-align: start; margin-top: 2; margin-right: 110px;">
  <br><br><br><br>
          <h4>¡Puedes realizar las rutas de senderismo <br> de este maravilloso pueblo!</h4>
        <!-- Aquí puedes agregar más contenido si es necesario -->
        <br><br><br><br>
        <h5>Embárcate en una emocionante aventura a través <br> de las diversas rutas de senderismo de Hoyo de Pinares, <br> donde cada paso te llevará a descubrir la frescura del agua, <br> la arquitectura histórica, vistas panorámicas impresionantes, <br> la espiritualidad de antiguas ermitas y la historia económica <br> de los molinos locales. ¡Cada ruta es una invitación a andar <br> y disfrutar de la riqueza natural e histórica que este encantador <br> lugar tiene para ofrecer! ¡Explora, conecta con la naturaleza y <br> deja que cada sendero te cuente su propia historia!</h5>
    </div>
        
        <div class="contenedor-video" style="border-left: 8px solid white; height: 833px;">
          <iframe class="video" width="80%" height="70%" src="https://www.youtube.com/embed/YAWqj_5bN0M" frameborder="10" allowfullscreen></iframe>
        </div>
        
    </div>
</div>

   <div class="container-fluid">
        <div class="row parallax-item2 justify-content-center text-center">
          <div class="container-texto">
            <h2 style="font-size: 2.5em; color: green; border: 4px solid green; padding: 10px; background-color: white;"><strong>NUESTRAS REDES SOCIALES</strong></h2>
          </div>
        
          <div class="row contenedor-fotos col-12 mt-3" style="scale: 0.8;">
              <div class="columna-imagen col-4">
                <br>
                <img class="imagen-social" src="{{ asset('images/iconofacebook.png') }}" alt="">
                <br><br>
                <a href="https://www.facebook.com/elhoyodepinares/" style="color: white; background-color: black;">Enlace a Facebook</a>
              </div>
              <div class="columna-imagen col-4">
              <br>
                <img class="imagen-social" src="{{ asset('images/iconoinstanuevo-removebg-preview.png') }}" alt="">
                <br><br>
                <a href="https://www.instagram.com/elhoyodepinares/" style="color: white; background-color: black;">Enlace a Instagram</a>
              </div>
              <div class="columna-imagen col-4">
              <br>
                <img class="imagen-social" src="{{ asset('images/iconotwitter.png') }}" alt="">
                <br><br>
                <a href="https://twitter.com/elhoyodepinares" style="color: white; background-color: black;">Enlace a Twitter</a>
              </div>
          </div>
        </div>
    </div>
    <div class="parallax-item3">
  <div class="px-5 py-5 px-md-5 text-center text-lg-start">
    <h2 style="text-align:center;"><strong>¿Le gustaría darse de alta?</strong></h2>
    <br>
    <p style="text-align:center;">Únase a nuestra exclusiva comunidad y descubra un mundo de maravillas<br> en el hermoso Hoyo de Pinares. Al registrarse, no solo obtendrá acceso a <br> experiencias únicas y eventos emocionantes, sino que también se sumergirá <br> en la serenidad de la naturaleza que rodea este rincón encantador. <br>¡Bienvenido a formar parte de nuestra familia, donde cada día es <br> una nueva oportunidad para crear recuerdos inolvidables en el Hoyo de Pinares!</p>
  </div>
  <div class="boton">
    <a class="btn btn btn-success mb-5" href={{ route('cliente.create')}}>Alta Cliente</a>
  </div>
  
</div>




        
          
  <!-- Jumbotron -->
</section>

</body>
</html>