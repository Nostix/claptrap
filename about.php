<!--
/********************************************************
* Dateiname: about.php
* Autor: Nostix Code
* letzte Aenderung: 28.06.2017
* Inhalt: Adminbereich, Login, Datenbankverwaltung
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
    <title>Band</title>
    
    <meta charset="utf-8">
    <meta name="description" content="Trapfestival">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
            <li><a class="active" href="about.php">Band</a></li>
            <li><a href="anfahrt.php">Anfahrt</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
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
      <!-- Vorstellung -->
      <div class="panel panel-transparent">
        <div class="panel-heading">
          <h3>Claptrap</h3>
        </div>
        <div class="panel-body">
          <p><h4>Das sind wir...</h4></p>
          <!-- Bandmitglied 1 -->
          <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-responsive-about img-center" src="img/Artists/Platzhalter200x200.png" alt="Platzhalter">
            <h3>Max Mustermann
              <small>Bassist</small>
            </h3>
            <p>Mit zarten Bässen bringt er das Publikum in´s Schwingen!</p>
          </div>
          <!-- Bandmitglied 2 -->
          <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-responsive-about img-center" src="img/Artists/Platzhalter200x200.png" alt="Platzhalter">
            <h3>Klaus Mustermann
              <small>Vocals</small>
            </h3>
              <p>Seine Stimme verf&uuml;hrt die Zuh&ouml;rer des &ouml;fteren dazu, das Tanzbein mitzuschwingen!</p>
          </div>
          <!-- Bandmitglied 3 -->
          <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-responsive-about img-center" src="img/Artists/Platzhalter200x200.png" alt="Platzhalter">
            <h3>Maria Mustermann
              <small>Drummerrin</small>
            </h3>
            <p>Mit ihren Drumms l&auml;sst sie die Herzen der Fans schneller schlagen!</p>
          </div>
          <!-- Bandmitglied 4 -->
          <div class="col-lg-4 col-sm-6 text-center artist-center-1">
            <img class="img-circle img-responsive-about img-center" src="img/Artists/Platzhalter200x200.png" alt="Platzhalter">
            <h3>Tom Mustermann
              <small>Vocals</small>
            </h3>
            <p> Mit seiner wundervollen Stimme verzaubert er das Publikum in seinen Bann!</p>
          </div>
          <!-- Bandmitglied 5 -->
          <div class="col-lg-4 col-sm-6 text-center artist-center-2">
            <img class="img-circle img-responsive-about img-center" src="img/Artists/Platzhalter200x200.png" alt="Platzhalter">
            <h3>Peter Mustermann
              <small>Gitarrist</small>
            </h3>
            <p>Mit Akkorden bringt er alle zum Tanzen!</p>
          </div>                               
        </div>
      </div>
      <!-- Geschichte -->
      <div class="panel panel-transparent">
        <div class="panel-heading">
          <h3>Geschichte</h3>
        </div>
        <div class="panel-body">
          <p>Unsere Band "Claptrap" entstand bereits 2011 durch ein Schulbandprojekt! Doch wir merkten schnell, die Gruppe war für mehr bestimmt, als nur für ein Schulprojekt. Also kamen wir schnell auf die Idee, aus dem Projekt eine richtige Band zu Gründen!</p>
          <p>Kurz nach unserer Gründung, entschieden wir uns dazu Coverlieder von aktuellen Charts zu singen! Mit dieser Idee war unser erster Schritt zum Erfolg bereits so gut wie getan! Denn nachdem wir uns für unsere Musikrichtung entschieden haben und unsere ersten Lieder perfektioniert hatten, kam bereits der erste Auftitt. Wir hatten uns kurz vorher nämlich bei der "Langen Nacht der Musik", eine schon sehr altes Schulevent, als Künstler beworben und nachdem wir ein kleines Vorspiel gerockt haben, war unser erster Auftritt gesichert!</p>
          <p>So ging es eine Zeitlang weiter, wir spielten bei den unterschiedlichsten Veranstaltungen unsere Lieder. Doch der Große Traum vom eingen Konzert war bis dahin noch nicht sichtbar! Doch nun haben wir es gewagt, mit brand neuen Liedern und coolen Sponsoren ist es bald soweit! Die erste eigen große Show kann kommen!</p>
        </div>
      </div>
      <!-- Back to Top Button -->
      <a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
      <hr>
      <footer>
        <p>&copy; Nostix Code 2k17 | <a href="impressum.php">Impressum</a> | <a href="admin.php">Admin-Bereich</a></p>
      </footer>
      <script src="js/vendor/jquery-1.11.2.min.js"></script>
      <script src="js/vendor/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
    </div>
  </body>
</html>
