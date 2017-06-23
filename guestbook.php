<?php session_start(); 
$dbhost = 'localhost';
$dbuser = 'php';
$dbpass = 'php';
$dbname = 'php';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $connect )
{
  die('Could not connect: ' . mysql_error());
}

$create_database = "CREATE TABLE IF NOT EXISTS guestbook (
            name VARCHAR(100),
            entry TEXT,
            postdate VARCHAR(60)
            )";
mysqli_query( $connect, $create_database);

if (isset($_POST['name']) && isset($_POST['nachricht'])) {
  $name = $_POST['name'];
  $nachricht = $_POST['nachricht'];
  date_default_timezone_set('Europe/Berlin');
  $date = date('d/m/y h:i', time());
  $add_query = $connect->prepare("INSERT INTO guestbook (name, entry, postdate)
  VALUES (?, ?, ?)");
  $add_query->bind_param('sss', $name,$nachricht,$date);
  $add_query->execute();
}

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Guestbook</title>
        <meta name="description" content="Trapfestival">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.css">
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
            <li><a class="active" href="guestbook.php">G&auml;stebuch</a></li>
          </ul>
      </div>
      </div>
    </nav>

    <div class="container">
    <div class="panel panel-transparent">
      <div class="panel-heading">
        <h3>G&auml;stebuch</h3>
      </div>
      <div class="panel-body">
      <?php
          if (!isset($_POST['schreiben'])) { ?>
        <form action="guestbook.php" method="post">
          <button type="submit" name="schreiben" class="btn btn-primary">Eintrag schreiben</button>
        </form><br><br>
          <?php

            $all_entrys = $connect->prepare("SELECT * FROM guestbook ORDER BY postdate DESC");
            $all_entrys->execute();
            $result = $all_entrys->get_result();

            while($row = mysqli_fetch_array($result)) {
              $name = $row[0];
              $nachricht = $row[1];
              $date = $row[2];

              echo '

                <div class="panel panel-transparent">
                  <div class="panel-heading">
                    <div class="gaestebuch_header">'.$name.'</div><div class="gaestebuch_header date">'.$date.'</div>
                  </div>
                  <div class="panel-body"><p>'.$nachricht.'</p></div>
                </div>
              ';
            } 
          }
          if (isset($_POST['schreiben'])) { ?>
        <form action="/guestbook.php" method="post">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" maxlength="31" style="width: 250px;"><br>
            <label for="nachricht">Nachricht</label>
            <textarea class="form-control" name="nachricht" id="nachricht" rows="5" maxlength="765" placeholder='Schreibe hier deinen Gästebucheintrag.'></textarea><br>
            <button type="submit" class="btn btn-success">Senden</button>
          </div>
        </form>
        <?php } ?>
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
