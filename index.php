<!--
/********************************************************
* Dateiname: index.php
* Autor: Nostix Code
* letzte Aenderung: 28.06.2017
* Inhalt: Startseite, Counter, Reservierungs-Button, Infos
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
          <h3>Das Konzert!</h3>
        </div>
        <div class="panel-body">
          <p>Ihr habt bock uns Live zu sehen? Am <b>4. Juli</b> sind wir den ganzen Abend im Kinder-Jugendhaus Kr&uuml;ckaupark Elmshorn und spielen f&uuml;r euch unsere besten Lieder! Der Eintritt kostet <b>4,99€</b> an der Abendkasse! Die Karten sind streng limitiert, also sicher euch <a href="reservierung.php">HIER</a> die Karten im vorraus! Das Konzert beginnt um <b>20:00</b> Uhr und der Einlass f&auml;ngt ab <b>18:30</b> Uhr an.</p>
          <p> Hungrig und durstig vom ganzen Feiern ? Kein Problem, k&uuml;hle Getr&auml;nke und warmes vom Grill stehen f&uuml;r euch bereit!</p>
        </div>
      </div>
      <div class="panel panel-transparent">
        <div class="panel-heading">
          <h3>Unsere Sponsoren</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4">
              <h3>K-J-H-K</h3>
              <p>Das Kinder-Jugendhaus Kr&uuml;ckaupark Elmshorn ist ein toller Platz f&uuml;r junge Leute. Alle jungedlichen sind herzlich eingeladen in Ihrer Freizeit vorbeizuschauen! Egal ob nach der Schule, nach dem Sport oder einfach so. Es gibt immer gen&uuml;gend Besch&auml;ftigungen und eine riesen menge Spaß! Tischkicker, Billiard, Fußball und noch viel viel mehr wird hier geboten! Aber auch coole Ausfl&uuml;ge oder Events, wie Konzerte, stehen hier immer wieder auf der Tagesordnung! &Uuml;ber Ein Besuch von euch w&uuml;rden wir uns sehr freuen, vielleicht sieht man sich ja mal!</p>
              <p><a class="btn btn-default" href="http://www.elmshorn.de/INTERNET/Kultur-Freizeit/Freizeit/Freizeitangebote-f%C3%BCr-Kinder-und-Jugendliche/Kinder-und-Jugendh%C3%A4user/index.php?La=1&NavID=2054.109&object=tx,1981.5079.1&kat=&kuo=2&sub=0" role="button">Zur Homepage &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h3>Stadt Elmshorn</h3>
              <p>Dank der Stadt Elmshorn, sind wir in der Lage unserem gemeinsamen Traum einer eigenen Band mit richtigen Auftritten ein St&uuml;ck n&auml;her gekommen! Durch die Unterst&uuml;tzung der Stadt haben wir es geschafft diesen Auftritt zu planen und durchf&uuml;hren zu k&ouml;nnen! <b>Vielen Dank!</b> </p>
            </div>
            <div class="col-md-4">
              <h3>Musik-Hofer</h3>
              <p>Musik-Hofer ist ein Patner der Musikfreunde! Dank der freundlichen Untersterst&uuml;tzung des Musikhauses, k&ouml;nnen wir mit professionellem Equipment unseren Auftritt anstreben! Das Musikhaus-Hofer bietet neben dem Verkauf von Instrumenten auch noch die Reparatur und sogar den Verleih dieser an!</p>
              <p><a class="btn btn-default" href="http://www.musik-hofer.de/" role="button">Zur Homepage &raquo;</a></p>
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