<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cigiden</title>

    <link href="https://fonts.googleapis.com/css?family=Domine:400,700|Roboto:300,400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <div id="headerNab">
    
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default">
      <div class="container">

        <ul class="nav navbar-nav navbar-right">
          <li>
            <input type="search" name="search" placeholder="Buscar" class="form-control">
          </li>
          <li><a href="#">Personas</a></li>
          <li><a href="#">El Centro</a></li>
          <li><a href="#">Anuncios</a></li>
          <li><a href="#">Contacto</a></li>
          <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/inglaterra.jpg"></a></li>
          <li><a href="#" class="padL0"><img src="<?php bloginfo('template_url'); ?>/img/espana.jpg"></a></li>
        </ul>

      </div>
    </nav>

  </div>



    <!-- Static navbar -->
    <nav class="navbar navbar-default" id="mainNav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="#">Inicio</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Agenda</a></li>
            <li><a href="#">Comunidad</a></li>
            <li class="big"><a href="#"><span>60</span> Proyectos</a></li>
            <li class="big"><a href="#"><span>32</span> Investigaciones</a></li>
            <li class="big"><a href="#"><span>6</span> Lineas de investigación</a></li>
            <li class="big"><a href="#"><span>78</span> Publicaciones</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>