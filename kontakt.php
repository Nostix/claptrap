<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kontakt</title>
        <meta name="description" content="Trapfestival">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
      
  <!--####### Navbar #######-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Claptrap</a>
          <a class="navbar-brand" href="about.php">About</a>
          <a class="navbar-brand" href="anfahrt.php">Anfahrt</a>
          <a class="navbar-brand" href="kontakt.php">Kontakt</a>
        </div>
      </div>
    </nav>
    
    <div class="container">
    <div class="panel panel-transparent">
      <div class="panel-heading">
        <h3>Kontaktformular</h3>
      </div>
      <div class="panel-body">
        <form action="/mail.php" method="post">
          <div class="form-group loginform">
          <br>
          <div class="formfirst">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name"><br>
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email-Adresse"><br>
          </div>
          <div class="formsecond">
            <label for="nachricht">Nachricht</label>
            <textarea class="form-control" name="nachricht" id="nachricht" rows="5" placeholder='Schreiben Sie hier ihre Nachricht.'></textarea><br>
            <button type="submit" class="btn btn-success">Senden</button>
          </div>
          </div>
        </form>
      </div>
    </div>

  <!--####### Back-to-top #######-->
   <a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

  <!--####### Footer #######-->
   <div class="container">
      <hr>

      <footer>
        <p>&copy; Nostix Code 2k17 | <?php include ("counter.php"); ?></p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
   </div>
    </body>
</html>