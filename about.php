<!--
/********************************************************
* Dateiname: about.php
* Autor: Nostix Code
* letzte Aenderung: 28.06.2017
* Inhalt: Adminbereich, Login, Datenbankverwaltung
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
          <h4>„Rap-Rock zum abgehen“</h4>
        </div>
        <div class="panel-body">
          <p>Wir sind "Die Band die ich persönlich am besten finde" und spielen Rap-Rock im Style vom Hollywood Undead und Limp Bizkit. Wir haben unser erstes Album rausgebracht und spielen in der Umgebung unsere Songs.</p><br />
          <!-- Bandmitglied 1 -->
          <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-responsive-about img-center" src="img/Artists/Platzhalter200x200.png" alt="Platzhalter">
            <h3>Max Mustermann
              <small>Bassist</small>
            </h3>
            <p>Mit zarten Bässen bringt er die Crowd in´s schwingen!</p>
          </div>
          <!-- Bandmitglied 2 -->
          <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-responsive-about img-center" src="img/Artists/Platzhalter200x200.png" alt="Platzhalter">
            <h3>Klaus Mustermann
              <small>Vocals</small>
            </h3>
              <p>Mit seiner Stimme bringt er die Crowd in´s schwingen!</p>
          </div>
          <!-- Bandmitglied 3 -->
          <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-responsive-about img-center" src="img/Artists/Platzhalter200x200.png" alt="Platzhalter">
            <h3>Maria Mustermann
              <small>Drummerrin</small>
            </h3>
            <p>Mit ihren Drums bringt sie die Crowd in´s schwingen!</p>
          </div>
          <!-- Bandmitglied 4 -->
          <div class="col-lg-4 col-sm-6 text-center artist-center-1">
            <img class="img-circle img-responsive-about img-center" src="img/Artists/Platzhalter200x200.png" alt="Platzhalter">
            <h3>Tom Mustermann
              <small>Vocals</small>
            </h3>
            <p>Mit seiner Stimme bringt er die Crowd in´s schwingen!</p>
          </div>
          <!-- Bandmitglied 5 -->
          <div class="col-lg-4 col-sm-6 text-center artist-center-2">
            <img class="img-circle img-responsive-about img-center" src="img/Artists/Platzhalter200x200.png" alt="Platzhalter">
            <h3>Peter Mustermann
              <small>Gitarrist</small>
            </h3>
            <p>Mit Akkorden bringt er die Crowd in´s schwingen!</p>
          </div>                               
        </div>
      </div>
      <!-- Geschichte -->
      <div class="panel panel-transparent">
        <div class="panel-heading">
          <h3>Geschichte</h3>
        </div>
        <div class="panel-body">
          <h2>Gründung</h2>
          <p>Wir haben uns 2013 durch die Schulband getroffen. Nach der Schule haben wir uns entschieden weiter als Band zu spielen. Wir haben früh gemerkt, dass wir ein gemeinsames Musik interesse haben und haben uns entschieden Rap-Rock zu machen. Zu unseren Vorbildern gehören Bands wie Hollywood Undead, Limp Bizkit und Thousand Foot Krutch. Unsere ersten Konzerte waren in der Schule auf dem Musikabend. Wir hatten recht früh viele Fans. Die meisten natürlich Schulfreunde, aber auch Leute aus anderen Schulen kamen zu unseren Schulkonzerten. Der Vater von (    ) hat ein eigenes Tonstudio. Dies war natürlich perfekt für uns. Also machten wir erst unsere erste LP und dann kamm auch schon die EP. Wir wurden immer bekannte und haben auftritte in Jungendzentren gehabt und unsere größten Erfolge war die Auftritte 2015 beim Rock ' Rose in Uetersen und 2016 auf dem Acker Festival in Kummerfeld.</p>
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
