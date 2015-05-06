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
<br><br>
<div class="container divcenter">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <form class="form-signin">
        <h2 class="form-signin-heading">Connectez vous</h2>
        <label for="Email" class="sr-only">Email</label>
        <input type="email" id="Email" class="form-control" placeholder="Email" required autofocus>
        <label for="Password" class="sr-only">Mot de Passe</label>
        <input type="password" id="Password" class="form-control" placeholder="Mot de Passe" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
      </form>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>