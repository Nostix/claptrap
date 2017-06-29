<!--
/********************************************************
* Dateiname: index.php
* Autor: Nostix Code
* letzte Aenderung: 28.06.2017
* Inhalt: Startseite, Counter, Reservierungs-Button, Infos
*
* Verwendete Funktionen (aus anderen Dateien):
*   (window).scroll(function ()
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
    <title>Claptrap</title>

    <meta charset="utf-8">
    <meta name="description" content="Trapfestival">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon" />
		<link rel="icon" href="img/logo.ico" type="image/x-icon" />

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
            <span class="sr-only">Mobile Navigation</span>
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
            <li><a href="kontakt.php">Kontakt</a></li>
            <li><a href="guestbook.php">G&auml;stebuch</a></li>
          </ul>
          <div class="nav navbar-nav navbar-right" style="margin-top: 5px;">
            <audio controls>
              <source src="http://www.w3schools.com/html/horse.ogg" type="audio/ogg" />
              <source src="http://www.w3schools.com/html/horse.mp3" type="audio/mpeg" />
              <a href="http://www.w3schools.com/html/horse.mp3">Platzhalter</a>
            </audio>
          </div>
        </div>
      </div>
    </nav>
    <!-- Besucherzähler -->
    <div class="Besucherzaehler">
      <img class="Besucherhintergrund" src="img/overlaybesucherzahler.png">
      <?php include ("counter.php"); ?>
    </div>
    <!-- Startbereich mit Countdown und Reservierung -->
    <div class="container" style="margin-top:20px;">
      <div class="jumbotron">
        <div class="container">
          <h1 class="Startbereich">Claptrap</h1>
          <h2 class="Startbereich" id="countdown"></h2>
          <script src="js/countdown.js"></script>
		      <div class="Startbereich">
            <p>
              <a href="reservierung.php" class="btn Reservierung">Jetzt Karten reservieren!</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Bilder Slideshow -->
    <div id="ScrollFunktion"></div>
    <div class="BilderSlideshow">
      <div class="container StartBilder">
        <div id="StartBilder" class="carousel slide" data-ride="carousel">
          <!-- Punkte/Positionsanzeige -->
          <ol class="carousel-indicators">
            <li data-target="#StartBilder" data-slide-to="0" class="active"></li>
            <li data-target="#StartBilder" data-slide-to="1"></li>
            <li data-target="#StartBilder" data-slide-to="2"></li>
          </ol>
          <!-- Bilder -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/1.jpg" alt="Bild Nummer 1">
            </div>
            <div class="item">
                <img src="img/2.jpg" alt="Bild Nummer 2">
            </div>
            <div class="item">
                <img src="img/3.jpg" alt="Bild Nummer 3">
            </div>
          </div>
          <!-- Bilder Navigation -->
          <a class="left carousel-control" href="#StartBilder" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#StartBilder" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
    </div>
    <!-- Infos -->
    <div class="container">
      <div class="panel panel-transparent">
        <div class="panel-heading">
          <h3>Wann? Wo? Was?</h3>
        </div>
        <div class="panel-body">
          <p>Ihr habt bock uns Live zu sehen? Am <b>4. Juli</b> sind den ganzen Abend im Kinder- Jugendhaus Krükaupark Elmshorn!
          Der Eintritt kostet <b>4,99€</b> und einlass ist um <b>18:30</b> </p>
          <p> Es wird für alles gesorgt, Getränke und Snacks gibt es drinnen und wer bock auf Warmes hat, kann sich draußen was vom Grillstand holen.</p>
        </div>
      </div>
      <div class="panel panel-transparent">
        <div class="panel-heading">
          <h3>Infos</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <h2>Kinder- Jugendhaus Krückaupark Elmshorn</h2>
              <p>Das Kinder- Jugendhaus Krückaupark Elmshorn ist eine großartige Location für Junge leute. Man kann sich dort nach der Schule oder einfach so am Abend treffen und mit Freunden chillen. Es gibt genügend beschäftigungen wie Tischkicker, Billiard, Fußball und mehr. Außerdem bieten sie auch tolle ausfahrten und Events an. <b> Ihr solltet echt mal vorbeischauen. </b>  </p>
              <p><a class="btn btn-default" href="#" role="button">Zur Homepage &raquo;</a></p>
            </div>
            <div class="col-md-6">
              <h2>Unsere Sponsoren?</h2>
              <p>Vielen Dank an das Kinder- Jugendhaus Krückaupark Elmshorn für die Bereitstellung der Location und der Snack / Getränke.<br />Ein großes dankeschön geht auch an Roland Würstchen für den Grillwagen. Unsere weiteren Sponsoren sind die Stadtwerke Elmshorn, Musikschule Elmshorn und Peter Kölln.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Back to Top Button -->
      <a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
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