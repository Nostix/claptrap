<!--
/********************************************************
* Dateiname: anfahrt.php
* Autor: Nostix Code
* letzte Aenderung: 28.06.2017
* Inhalt: Anfahrt, Google Map
*
* Verwendete Funktionen (aus anderen Dateien):
*   (window).scroll(function (), function initMap()
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
    <title>Anfahrt</title>
    <meta charset="utf-8">
    <meta name="description" content="Trapfestival">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
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
            <li><a class="active" href="anfahrt.php">Anfahrt</a></li>
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
      <div class="panel panel-transparent">
        <div class="panel-heading">
          <h3>Anfahrts-Karte</h3>
        </div>
        <div class="panel-body">
          <h1>Anfahrt</h1>
          <p class="lead">Wo findet denn die Party statt? Natürlich im Jugendhaus Elmshorn! <b>Zum Krückaupark 5A 25337 Elmshorn</b></p>
          <p><b>Es gibt gen&uuml;gend Parkplätze.</b> Das Jugendhaus ist direkt neben der Schwimhalle und demKr&uuml;ckaustadion.</p>
          <div class="panel panel-transparent">
            <div class="panel-heading">
              <h3>Der Weg vom Bahnhof</h3>
            </div>
            <div class="panel-body">
              <p>F&uuml;r den Fußweg vom Bahnhof m&uuml;sst ihr ca. 15min einplanen.<br />Rechts aus dem Bahnhof rausgehen (nicht richtung Stadtkern). Einfach die M&uuml;hlenstraße bis zum Ende laufen, dann über die Ampel gehen und rechts halten. Die Langelohe Str. solange entlang laufen, bis ihr kurz vor der Kreuzung auf der linken Seite einen Sandweg in ein Waldstück findet. Lauft den Weg wieder bis zum Ende. Ihr werdet an einer Turnhalle vorbeikommen und auch die Schwimmhalle sehen. Geht an der Schwimhalle vorbei und auf das erste Haus daneben ist das Jugendhaus.</p>
            </div>
          </div>
          <!-- Google Map -->
          <div id="map"></div>
        </div>
      </div>
      <!-- Back to Top Button -->
      <a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
      <hr>
      <footer>
        <p>&copy; Nostix Code 2k17 | <a href="impressum.php">Impressum</a> | <a href="admin.php">Admin-Bereich</a></p>
      </footer>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8MBDqNqKc6Y1gxkQvscjZaW9jY8AbXhs" type='text/javascript'></script>
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
