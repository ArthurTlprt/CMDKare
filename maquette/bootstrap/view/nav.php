<?php $url = $_SERVER['PHP_SELF']; 
      $reg = '#^(.+[\\\/])*([^\\\/]+)$#';
      $file = preg_replace($reg, '$2', $url); ?>

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
            <li class="<?php if($file=='index.php'){ echo "active" ;} ?> dropdown">
            <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Acceuil<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="index.php#About">About Us</a></li>
                <li class="dropdown-header"><a href="index.php#presentation">Presentation</a></li>
                <li class="dropdown-header"><a href="index.php#actualites">L'Actu</a></li>
                <li class="dropdown-header"><a href="index.php#histoire">Notre Histoire</a></li>
                <li class="dropdown-header"><a href="index.php#associes">Associés</a></li>
                <li class="dropdown-header"><a href="index.php#valeurs">Nos Valeurs</a></li>
              <li class="divider"> </li>
              <li><a href="index.php#Organisation">Notre Organisation</a></li>
                <li class="dropdown-header"><a href="index.php#consultants">Nos Consultants</a></li>
                <li class="dropdown-header"><a href="index.php#experts">Nos Experts</a></li>
              <li class="divider"> </li>
              <li><a href="index.php#Expertises">Nos Expertises</a></li>
            </ul>
            </li>
            <!-- DROP PRESTA/OUTILS -->
            <li class="<?php if($file=='prestation.php'){ echo "active" ;} ?> dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Prestations/Outils<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="prestation.php#Optimisation">Optimisation</a></li>
                <li><a href="prestation.php#Evaluation">Évaluation</a></li>
                <li><a href="prestation.php#Diagnostic">Diagnostic</a></li>
                <li><a href="prestation.php#Projet">Gestion de projet</a></li>
                <li><a href="prestation.php#Formalisation">Formalisation</a></li>
                <li><a href="prestation.php#Modelisation">Modélisation</a></li>
              </ul>
            </li>
            <!-- DROP CONTACT -->
            <li class="<?php if($file=='contact.php'){ echo "active" ;} ?> dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nous Contacter<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="contact.php#About">Contactez Nous</a></li>
                <li><a href="contact.php#Organisation">Work With Us</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="<?php if($file=='juridique.php'){ echo "active" ;} ?> "><a href="juridique.php">Veille Juridique</a></li>
            <li class="<?php if($file=='connection.php'){ echo "active" ;} ?> "><a href="connection.php">Administrateur</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>