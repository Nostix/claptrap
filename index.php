<!doctype html>
    <?php
        define('include', TRUE);
        include_once 'session.php';
        include_once 'db_connect.php';
        include_once 'check.php';
        if(isset($_SESSION['logged_in'])) {
          Header("Location: /orders.php");
        }
  ?>
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
          <a class="navbar-brand" href="about.html">About</a>
          <a class="navbar-brand" href="anfahrt.html">Anfahrt</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form" action="orders.php" method="post">
            <div class="form-group">
              <input type="number" name="kdnr" placeholder="Kundennummer" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Passwort" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container" style="margin-top:20px;">
    <?php
        if(isset($_GET['nda'])) {
            echo '<div class="alert alert-danger" role="alert"><strong>Direct access denied!</strong> The Page you requested is not allowed to be accessed directly.</div>';
        }
        if(isset($_GET['logout'])) {
            echo '<div class="alert alert-success" role="alert"><strong>Logout erfolgreich!</strong> Du bist jetzt nicht mehr angemeldet.</div>';
        }
        if(isset($_GET['invalidlogout'])) {
            echo '<div class="alert alert-danger" role="alert"><strong>Wie m&ouml;chtest du dich ausloggen?</strong> Du warst nicht angemeldet.</div>';
        }
        if(isset($_SESSION['setupdone'])) {
          echo '<div class="alert alert-success" role="alert"><strong>First-time Setup done!</strong> Application is now ready to use.</div>';
          unset($_SESSION['setupdone']);
        }
    ?>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="mainheader">Claptrap</h1>
        <p class="mainheader">Das Trapfestival des Nordens. Lass dir das nicht entgehen! Und sichere dir deine Teilnahme. Immer nach dem Motto: Untz Untz Wup Wup</p>
		    <div class="ticket-button mainheader"><p><a href="/order.php" class="btn btn-outlined btn-danger">Jetzt Karten bestellen!</a></p></div>
        <!-- old Button  <p class="mainheader"><a class="btn btn-danger btn-lg" href="#" role="button">Jetzt Karten bestellen &raquo;</a></p>-->
	  
      </div>
    </div>
    
    <div class="section-white">
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
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      
      <!--####### Footer ######-->
      
      <a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>


<!--####### Footer ######-->
      <hr>

      <footer>
        <p>&copy; Nostix Code 2k17</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>