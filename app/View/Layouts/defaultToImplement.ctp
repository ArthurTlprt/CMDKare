<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CMD Kare</title>

    <!-- Bootstrap -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="custom.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CMD Kare (LOGO) </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <!-- DROP ACCEUIL -->
            <li class="active dropdown">
            <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Acceuil<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="index.html#About">About Us</a></li>
                <li class="dropdown-header"><a href="index.html#presentation">Presentation</a></li>
                <li class="dropdown-header"><a href="index.html#actualites">L'Actu</a></li>
                <li class="dropdown-header"><a href="index.html#histoire">Notre Histoire</a></li>
                <li class="dropdown-header"><a href="index.html#associes">Associés</a></li>
                <li class="dropdown-header"><a href="index.html#valeurs">Nos Valeurs</a></li>
              <li class="divider"> </li>
              <li><a href="index.html#Organisation">Notre Organisation</a></li>
                <li class="dropdown-header"><a href="index.html#consultants">Nos Consultants</a></li>
                <li class="dropdown-header"><a href="index.html#experts">Nos Experts</a></li>
                <li class="dropdown-header"><a href="index.html#consultants">Nos Consultants</a></li>
              <li class="divider"> </li>
              <li><a href="index.html#Expertises">Nos Expertises</a></li>
            </ul>
            </li>
            <!-- DROP PRESTA/OUTILS -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Prestations/Outils<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="prestation.html#Optimisation">Optimisation</a></li>
                <li><a href="prestation.html#Evaluation">Évaluation</a></li>
                <li><a href="prestation.html#Diagnostic">Diagnostic</a></li>
                <li><a href="prestation.html#Projet">Gestion de projet</a></li>
                <li><a href="prestation.html#Formalisation">Formalisation</a></li>
                <li><a href="prestation.html#Modelisation">Modélisation</a></li>
              </ul>
            </li>
            <!-- DROP CONTACT -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nous Contacter<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="contact.html#About">Contactez Nous</a></li>
                <li><a href="contact.html#Organisation">Work With Us</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="juridique.html">Veille Juridique</a></li>
            <li><a href="connection.html">Administrateur</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <?= $this->fetch('content'); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../dist/js/bootstrap.min.js"></script>
  </body>
</html>