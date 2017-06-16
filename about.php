<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>About</title>
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
            <li><a class="active" href="about.php">About</a></li>
            <li><a href="anfahrt.php">Anfahrt</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            <li><a href="guestbook.php">G&auml;stebuch</a></li>
          </ul>
        </div>
      </div>
    </nav>




    <!-- Content -->
    <div class="container">

        <!-- Vorstellung -->
        <div class="row">
          <div class="col-lg-12">
              <div class="panel panel-transparent">
                <div class="panel-heading"><h3>Claptrap Festival</h3>
                    <h4>„Das größte Trap Festival im Norden“</h4>
                </div>
                <div class="panel-body">
                <p>Erlebt mit 55.000 anderen Trap begeisgerten das größte Trap Festival im Norden! Denn kein anderer bietet so viel Trap im Norden wie wir! Der Bass wird euch durchdringen und euch zum erzittern bringen! Das wird ein Erdbeben der brutalen art.</p>
                <p>ALSO WORAUF WARTET IHR!!! DAS WIRD DAS FESTIVAL DES JAHRES</p>
                </div>
              </div>
            </div>
        </div>

        <!-- Kuenstler -->
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-transparent">
              <div class="panel-heading">
                <h3>Künstler</h3>
              </div>
              <div class="panel-body">
                <div class="col-lg-4 col-sm-6 text-center">
                  <img class="img-circle img-responsive-about img-center" src="img/Trap_Artists/Luminox.jpg" alt="Luminox Bild">
                  <h3>Luminox
                    <small>DJ</small>
                  </h3>
                  <p>Der Junge aus Phoenix, Arizona überzeugt mit verspielten und auffälligen Beats!</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                  <img class="img-circle img-responsive-about img-center" src="img/Trap_Artists/UZ.jpg" alt="UZ Bild">
                  <h3>ƱZ
                    <small>sample</small>
                  </h3>
                  <p>Keiner lässt die Boxen besser beben! Tiefe und böse Bässe lassen euch erzittern!	</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                  <img class="img-circle img-responsive-about img-center" src="img/Trap_Artists/Baauer.jpg" alt="Baauer Bild">
                  <h3>Baauer
                    <small>sample</small>
                  </h3>
                  <p>Entspannter Trap zum Chillen. Perfekt zum Cruisen oder am Strand Skateboard fahren</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                  <img class="img-circle img-responsive-about img-center" src="img/Trap_Artists/TNGHT.jpg" alt="TNGHT Bild">
                  <h3>TNGHT
                    <small>sample</small>
                  </h3>
                  <p>Aggressive Bässe mit einzigartigen Klang! Wer da nicht abgeht ist Taub!</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                  <img class="img-circle img-responsive-about img-center" src="img/Trap_Artists/RL_grime.jpg" alt="RL GRIME Bild">
                  <h3>RL GRIME
                    <small>sample</small>
                  </h3>
                  <p>Party machen und abgehen ist sein Spezial gebiet. Seinen Beats machen einfach Spaß beim zuhören.</p>
                </div>
              </div>
            </div>
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
    </div> <!-- /container -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
   </div>
    </body>
</html>
