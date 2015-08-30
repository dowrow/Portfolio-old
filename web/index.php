<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Diego Castaño</title>
  <link rel="stylesheet" href="css/app.css" />
  <script src="bower_components/modernizr/modernizr.js"></script>
</head>
<body>
<div class="fixed">

  <nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <h1><a href="#">Diego Castaño</a></h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li><a href="#parallaxVideojuegos">Videojuegos</a></li>
        <li><a href="#parallaxMoviles">Apps Móviles</a></li>
        <li><a href="#parallaxWeb">Sitios Web</a></li>
        <li><a href="#parallaxContacto">Contacto</a></li>
      </ul>

    </section>
  </nav>
</div>
  <!-- HOLA -->
  <section id="hola" class="row">
    <div class="large-2 small-6 columns">
      <img id="avatar"  src="https://avatars3.githubusercontent.com/u/4643024?v=3&s=460" alt="Diego Castaño Github Avatar"/>
    </div>
    <div class="large-10 small-6  columns">
      <h1>¡Hola!</h1>
      <h3>Soy Diego Castaño y me dedico a desarrollar software.<br/>
    </div>
  </section>

  <!-- PARALLAX CITA-->   
  <section id="parallaxCita" class="parallax parallax-window" data-parallax="scroll" data-image-src="img/server.jpg">
    <div class="row">

      <h2 class="large-12 columns">«In programming the hard part isn’t solving
        problems,<br/> but deciding what problems to solve.»</h1>     
        <h3 class="author large-12 columns">Paul Graham</h3>
      </div>
    </section>

    <!-- APPS -->
    <section id="apps" class="row">
      <div class="large-4 columns">
        <h1><span class="fi-monitor"></span></h1>
        <h3>Videojuegos</h3>
        <p>Juegos para Android y PC.</p>
        <a href="#parallaxVideojuegos" class="radius button">Saber más</a>
      </div>

      <div class="large-4 columns">
        <h1><span class="fi-mobile"></span></h1>
        <h3>Apps Móviles</h3>
        <p>Aplicaciones para Android.</p>
        <a href="#parallaxMoviles" class="radius button">Saber más</a>
      </div>

      <div class="large-4 columns">
        <h1><span class="fi-laptop"></span></h1>
        <h3>Sitios Web</h3>
        <p>Aplicaciones y páginas web.</p>
        <a href="#parallaxWeb" class="radius button">Saber más</a>
      </div>
    </section>

    <!-- PARALLAX VIDEOJUEGOS-->   
    <section id="parallaxVideojuegos" class="parallax parallax-window" data-parallax="scroll" data-image-src="img/game.jpg">
      <div class="row">
        <h3    class="large-12 columns">Utilizo XNA y LibGDX para desarrollar juegos multiplataforma.</h3>     
      </div>
    </section>

    <!-- VIDEOJUEGOS -->
    <section id="videojuegos" class="row">
      <h1>Videojuegos</h1>
    </section>

    <!-- PARALLAX MOVILES-->   
    <section id="parallaxMoviles" class="parallax parallax-window" data-parallax="scroll" data-image-src="img/smartphone.jpg">
      <div class="row">
        <h3 class="large-12 columns">Desarrollo apps para Android con Phonegap, HTML5 y CSS3.</h3>
      </div>
    </section>

    <!-- APPS MÓVILES-->
    <section id="appsmoviles" class="row">
      <h1>Apps Móviles</h1>
    </section>

    <!-- PARALLAX SITIOS WEB-->   
    <section id="parallaxWeb" class="parallax parallax-window" data-parallax="scroll" data-image-src="img/code.jpg">
      <div class="row">
        <h3 class="large-12 columns">Implemento aplicaciones web con HTML5, Javascript, SASS, PHP y Java.</h3>
      </div>
    </section>

    <!-- SITIOS WEB -->
    <section id="sitiosweb" class="row">
      <h1>Sitios Web</h1>
      <br/>

      <h3>ShitVids.com</h3>
      <a class="button radius right" href="http://shitvids.com" target="_blank">Visitar</a>
      <br/>

      <h3>QuimeraTeam.com</h3>
      <a class="button radius right" href="http://quimera.herokuapp.com" target="_blank">Visitar</a>
      <br/>

      <h3>Music Analyzer</h3>
      <a class="button radius right" href="http://apps.facebook.com/music-analyzer" target="_blank">Visitar</a>
      <br/>
    </section>


    <!-- PARALLAX CONTACTO -->
    <section id="parallaxContacto" class="parallax parallax-window" data-parallax="scroll" data-image-src="img/coffee.jpg">
      <h1>Contacta conmigo</h1>
      <br/>
      <div>
        <a class="button radius" href="https://github.com/dowrow/" target="_blank"><span class="fi-social-github"></span> Github</a>
        <a class="button radius" href="http://stackoverflow.com/users/1456710/diego-casta%C3%B1o-chillar%C3%B3n" target="_blank"><span class="fi-social-stack-overflow"> StackOverflow</a>
        <a class="button radius" href="https://es.linkedin.com/in/diegocastanno" target="_blank"><span class="fi-social-linkedin"> Linkedin</a>
        <a class="button radius" href="mailto:diego.castano@outlook.com" target="_blank"><span class="fi-mail"> Email</a>
      </div>
    </ul>
  </section>

  <footer>
  	<span class"center">
  	Copyright Diego Castaño <?php echo date("Y"); ?> · Powered by <a href="http://foundation.zurb.com/" target="_blank">Foundation</a>
  	</span>
  </footer>


  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="bower_components/foundation/js/foundation.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
