<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Claptrap</title>
        <meta name="description" content="Trapfestival">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

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
            <li><a href="anfahrt.php">Anfahrt</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            <li><a href="guestbook.php">G&auml;stebuch</a></li>
          </ul>
          <div class="nav navbar-nav navbar-right" style="margin-top: 5px;">


          	<audio controls>
	<source src="http://www.w3schools.com/html/horse.ogg" type="audio/ogg" />
	<source src="http://www.w3schools.com/html/horse.mp3" type="audio/mpeg" />
	<a href="http://www.w3schools.com/html/horse.mp3">horse</a>
</audio>
          </div>
    	</div>
      </div>
    </nav>
    <div style="float: right;">
    <img style="position: relative; margin-bottom: 50px;" src="img/overlaybesucherzahler.png">
    <?php include ("counter.php"); ?>
    </div>


  <div class="container" style="margin-top:20px;">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="mainheader">Claptrap</h1>
        <h2 class="mainheader" id="countdown"></h2>
        <script src="js/countdown.js"></script>
		    <div class="ticket-button mainheader"><p><a href="reservierung.php" class="btn btn-outlined btn-danger">Jetzt Karten reservieren!</a></p></div>
        <!-- old Button  <p class="mainheader"><a class="btn btn-danger btn-lg" href="#" role="button">Jetzt Karten bestellen &raquo;</a></p>-->
	 </div>
      </div>
    </div>
    <div id="firstelement" style="margin-bottom: 75px;"></div>
    <div class="imagecarousel">
        <div class="container frontimages">

            <div id="frontimages" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#frontimages" data-slide-to="0" class="active"></li>
                    <li data-target="#frontimages" data-slide-to="1"></li>
                    <li data-target="#frontimages" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/1.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="img/2.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="img/3.jpg" alt="...">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#frontimages" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#frontimages" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>

        </div>
    </div>

<div class="container">
      <!-- Example row of columns -->
    <div class="panel panel-transparent">
      <div class="panel-heading">
        <h3>Die Band die ich persönlich am besten finde</h3>
      </div>
      <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <h2>Wer sind wir?</h2>
          <p>Ihr habt bock uns Live zu sehen? Am <b>4. Juli</b> sind den ganzen Abend im Kinder- Jugendhaus Krükaupark Elmshorn!
          Der Eintritt kostet <b>4,99€</b> und einlass ist um <b>18:30</b> </p>
          <p> Es wird für alles gesorgt, Getränke und Snacks gibt es drinnen und wer bock auf Warmes hat, kann sich draußen was vom Grillstand holen.</p>
        </div>
      </div>
      </div>

      <!-- Example row of columns -->
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
          <p>Vielen Dank an das Kinder- Jugendhaus Krückaupark Elmshorn für die Bereitstellung der Location und der Snack / Getränke.
            Ein großes dankeschön geht auch an Roland Würstchen für den Grillwagen.
            Unsere weiteren Sponsoren sind die Stadtwerke Elmshorn, Musikschule Elmshorn und Peter Kölln.</p>
          
       </div>
        
        </div>
      </div>

      
      <!--####### Footer ######-->
      
      <a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>


<!--####### Footer ######-->
      <hr>

      <footer>
        <p>&copy; Nostix Code 2k17 | <a href="impressum.php">Impressum</a></p>
      </footer>
    </div> <!-- /container -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
