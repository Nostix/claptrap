<!--
/********************************************************
* Dateiname: kontakt.php
* Autor: Nostix Code
* letzte Aenderung: 28.06.2017
* Inhalt: Kontaktformular
*
* Verwendete Funktionen (aus anderen Dateien):
*   (window).scroll(function (), $('#back-to-top').click(function), window.cookieconsent.initialise()
*   
*
* Definierte Funktionen:
*   /
********************************************************/
-->
<?php session_start(); ?>
<!doctype html>
<html>
  <head>
    <title>Kontakt</title>
    
    <meta charset="utf-8">
    <meta name="description" content="Trapfestival">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon" />
    <link rel="icon" href="img/logo.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script src="js/cookies.js"></script>
  </head>
  <body>
  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
      <!-- Navigation für Mobile Geräte -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Claptrap</a>
        </div>
        <!-- Eigentliche Navigation -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="about.php">Band</a></li>
            <li><a href="anfahrt.php">Anfahrt</a></li>
            <li><a class="active" href="kontakt.php">Kontakt</a></li>
            <li><a href="guestbook.php">G&auml;stebuch</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Besucherzähler -->
    <div class="Besucherzaehler">
      <img class="Besucherhintergrund" src="img/overlaybesucherzahler.png">
      <?php include ("counter.php"); ?>
    </div>
    <div class="container">
      <div class="panel panel-transparent">
        <div class="panel-heading">
          <h3>Kontaktformular</h3>
        </div>
        <div class="panel-body">
          <?php
            // Benachrichtignung nach erfolgreichem Senden
            if(isset($_GET['mailsent']))
            {
              echo '<div class="alert alert-success" role="alert"><strong>Danke!</strong> Ihre nachricht wurde gesendet.</div>';
            }
          ?>
          <!-- Kontaktformular -->
          <form action="mail.php" method="post">
            <div class="form-group LoginFormular">
              <br />
              <div class="ResponsiveFormularLinks">
                <label for="Name">Name*</label>
                <input type="text" class="form-control" name="Name" id="Name" maxlength="40" placeholder="Name" required><br>
                <label for="Email">Email*</label>
                <input type="email" class="form-control" name="Email" id="Email" maxlength="70" placeholder="Email-Adresse" required><br>
              </div>
              <div class="ResponsiveFormularRechts">
                <label for="Nachricht">Nachricht*</label>
                <textarea class="form-control" name="Nachricht" id="Nachricht" rows="5" maxlength="800" placeholder='Schreiben Sie hier ihre Nachricht.' required></textarea><br>
                <button type="submit" class="btn btn-success">Senden</button>
              </div>
            </div>
          </form>
          *Erforderliche Felder
        </div>
      </div>
      <!-- Back to Top Button -->
      <a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
      <div class="container">
      <hr>
      <footer>
        <p>&copy; Nostix Code 2k17 | <a href="impressum.php">Impressum</a> | <a href="admin.php">Admin-Bereich</a></p>
      </footer>
    </div>
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
