<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CMD Kare</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
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

<?php include("nav.php"); ?>
<div class="container">
  <br><br>
  <div class="jumbotron">
    <div class="row">
      <div class="col-sm-5">
        <h3 class="page-header blue-text">
          Ou Sommes Nous ?
        </h3>

      </div>
      <div class="col-sm-7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5062.520098187668!2d3.0455488564644764!3d50.62228576364017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1430910008171" width="600" height="450" frameborder="0" style="border:0"></iframe> 
      </div>
    </div>
  </div>
  <h3 class="page-header blue-text">
    Formulaire de Contact
  </h3>
  <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      Pour nous contacter, vous pouvez utiliser ce formulaire, nous vous répondrons dans les plus brefs délais. Les champs verts sont obligatoires pour nous permettre de vous répondre.
  </div>
  <!-- FORMULAIRE MAIL -->
  <form class="form-horizontal">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-1"><div class="form-group has-success">
        <label class="sr-only" for="name">Nom</label>
        <div class="input-group">
          <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
          <input type="text" class="form-control" id="name" placeholder="Nom">
        </div>
      </div></div>
      
      <div class="col-sm-4 col-sm-offset-2"><div class="form-group has-success">
        <label class="sr-only control-label" for="email">Email</label>
        <div class="input-group">
          <div class="input-group-addon">@</div>
          <input type="text" class="form-control" id="email" placeholder="Email">
        </div>
      </div></div>

      <div class="col-sm-4 col-sm-offset-1"><div class="form-group has-success">
        <label class="sr-only" for="tel">Numero</label>
        <div class="input-group">
          <div class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></div>
          <input type="text" class="form-control" id="tel" placeholder="Tel">
        </div>
      </div></div>

      <div class="col-sm-4 col-sm-offset-2"><div class="form-group">
        <label class="sr-only" for="fonction">Fonction</label>
        <div class="input-group">
          <div class="input-group-addon"><span class="glyphicon glyphicon-wrench "></span></div>
          <input type="text" class="form-control" id="fonction" placeholder="Fonction">
        </div>
      </div></div>

      <div class="col-sm-4 col-sm-offset-1"><div class="form-group">
        <label class="sr-only" for="sujet">Sujet</label>
        <div class="input-group">
          <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
          <input type="text" class="form-control" id="sujet" placeholder="Sujet">
        </div>
      </div></div>
    </div>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-1 has-success">
      <textarea class="form-control" rows="3" id="message" placeholder="Ecrivez votre message"></textarea>
      </div>
      <div class="col-sm-2">
        <br>
        <button class="btn btn-success btn-lg" type="submit">
          Envoyer
        </button>
      </div> 
    </div>
    <br>
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Info :</strong> Les données personnelles recueillies ci-dessus, traitées et enregistrées par CMDKare, sont obligatoires et sont notamment destinées à notre service de gestion des clients. 
      Ces données, pendant toute la durée de la relation pourront être communiquées aux prestataires de service et sous-traitants, qui exécutent certaines tâches indispensables. 
      Ces données personnelles pourront donner lieu à l'exercice du droit d'accès, de rectification et d'opposition dans les conditions prévues par la loi n° 78-17 du 6 janvier 1978 modifiée relative à l'informatique, aux fichiers aux libertés, par courrier adressé à : CMDKare …
    </div>
    <hr>
  </form>

<div class="row"><div class="col-sm-6 col-sm-offset-4">
    <button class="btn btn-primary btn-lg" type="button" data-toggle="collapse" data-target="#newsletter" aria-expanded="false" aria-controls="newsletter">
      Je m'abonne à la Newsletter !
    </button>
    <div class="collapse" id="newsletter">
      <div class="well">
        <div class="row">
          <br>
          <div class="col-sm-8">
            <form class="form-signin">
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="example@gmail.com">
              </div>
              </div>
              <div class="col-sm-4">
                <button class="btn btn-primary btn-block" type="submit">
                  Envoyer
                </button>
              </div>
            </form>
        </div>
      </div>
    </div>
</div></div>
</div>
<br>
<?php include('footer.php');?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>