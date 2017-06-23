<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Anfahrt</title>
        <meta name="description" content="Trapfestival">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
        <script src="js/cookies.js"></script>
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
        </div>
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

  <!--####### Content #######-->
    <div class="container">
      <div class="row">
        <div class="panel panel-transparent">
          <div class="panel-heading">
            <h3>Anfahrts-Karte</h3>
          </div>
          <div class="panel-body">
            <h1>Anfahrt</h1>

            <p class="lead">Wo findet denn die Party statt? Natürlich im Jugendhaus Elmshorn! <b>Zum Krückaupark 5A 25337 Elmshorn</b></p>

            <p><b>Es gibt gen&uuml;gend Parkplätze.</b> Das Jugendhaus ist direkt neben der Schwimhalle und dem
            Kr&uuml;ckaustadion. </p>

            <div class="panel panel-transparent">
              <div class="panel-heading">
                <h3>Der Weg vom Bahnhof</h3>
              </div>
              <div class="panel-body">

              <p>F&uuml;r den Fußweg vom Bahnhof m&uuml;sst ihr ca. 15min einplanen.
              Rechts aus dem Bahnhof rausgehen (nicht richtung Stadtkern). Einfach die M&uuml;hlenstraße bis zum Ende laufen, dann über die Ampel gehen und rechts halten. Die Langelohe Str. solange entlang laufen, bis ihr kurz vor der Kreuzung auf der linken Seite einen Sandweg in ein Waldstück findet. Lauft den Weg wieder bis zum Ende. Ihr werdet an einer Turnhalle vorbeikommen und auch die Schwimmhalle sehen. Geht an der Schwimhalle vorbei und auf das erste Haus daneben ist das Jugendhaus.</p>

              </div>
            </div>
            <div id="map"></div>
          </div>
        </div>
      </div> 
    </div> 

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8MBDqNqKc6Y1gxkQvscjZaW9jY8AbXhs" type='text/javascript'></script>

  <!--####### Back-to-top #######-->
   <a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

  <!--####### Footer #######-->
   <div class="container">
      <hr>

      <footer>
        <p>&copy; Nostix Code 2k17 | <?php include ("counter.php"); ?></p>
      </footer>
    </div> <!-- /container -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
   </div>
    </body>
</html>
