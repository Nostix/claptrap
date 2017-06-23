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

$admin_user = 'admin';
$admin_password = 'admin';
$admin_encrypt = password_hash($admin_password, PASSWORD_BCRYPT);

if (isset($_POST['user']) && isset($_POST['password'])) {
  $user = $_POST['user'];
  $password = $_POST['password'];
  if (password_verify($password, $admin_encrypt) && $user === $admin_user) {
  	$_SESSION['loggedin'] = 'true';
  }
}
if (isset($_POST['delete_reservation'])) {
  $_POST['orders'] = 'true';
	$todelete = $_POST['delete_reservation'];
	$delete = $connect->prepare("DELETE FROM karten WHERE id LIKE ?");
	$delete->bind_param('s', $todelete);
	$delete->execute();
}
if (isset($_POST['delete_guestentry'])) {
  $_POST['guestbook'] = 'true';
  $todelete = $_POST['delete_guestentry'];
  $delete = $connect->prepare("DELETE FROM guestbook WHERE id LIKE ?");
  $delete->bind_param('s', $todelete);
  $delete->execute();
}
if (isset($_POST['logout'])) {
	unset($_SESSION['loggedin']);
}

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin-Bereich</title>
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
    <div style="float: right;">
    <img style="position: relative;" src="img/overlaybesucherzahler.png">
    <?php include ("counter.php"); ?>
    </div>

    <div class="container">
    <div class="panel panel-transparent">
      <div class="panel-heading">
      <?php
        if (isset($_SESSION['loggedin'])) { ?>
        <div class="gaestebuch_header"><h3>Admin-Bereich</h3></div><form class="gaestebuch_header date" action="admin.php" method="post"><button type="submit" name="logout" class="btn btn-danger">Logout</button></form>
        <?php } else { ?>
        <h3>Admin-Bereich</h3>
        <?php } ?>
      </div>
      <div class="panel-body">
      <?php
          if (!isset($_SESSION['loggedin'])) { ?>
        <form action="admin.php" method="post">
          <div class="form-group loginform">
          <div class="formfirst admintext">
            <p>Falls Sie Administrator sind, können Sie sich hier anmelden.<br>
            andernfalls kehren Sie bitte <a href="index.php">hier</a> zur Startseite zurück.</p>
            <p>Vielen Dank</p>
          </div>
          <div class="formsecond">
            <label for="name">User</label>
            <input type="text" class="form-control" name="user" id="user" maxlength="40" placeholder="Name" required><br>
            <label for="name">Password</label>
            <input type="password" class="form-control" name="password" id="password" maxlength="40" placeholder="Name" required><br>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
          </div>
          </div>
        </form><br><br>
          <?php }
          else { ?>
            <p>Wählen Sie aus, was Sie bearbeiten wollen:
            <form action="admin.php" method="post">
              <button type="submit" name="guestbook" class="btn btn-primary">Gästebucheintrage</button>
            </form><br>
            <form action="admin.php" method="post">
              <button type="submit" name="orders" class="btn btn-primary">Bestellungen</button>
            </form><br>
          <?php
          if(isset($_POST['guestbook'])) {

            $all_entrys = $connect->prepare("SELECT * FROM guestbook ORDER BY postdate DESC");
            $all_entrys->execute();
            $result = $all_entrys->get_result();

            while($row = mysqli_fetch_array($result)) {
              $id = $row[0];
              $name = $row[1];
              $nachricht = $row[2];
              $date = $row[3];

              echo '

                <div class="panel panel-transparent">
                  <div class="panel-heading">
                    <div class="gaestebuch_header">'.$name.'</div><div class="gaestebuch_header date">'.$date.' <form action="admin.php" method="post" style="display: inline-block;"><button name="delete_guestentry" value="'.$id.'" class="btn btn-xs btn-danger">Löschen</button></form></div>
                  </div>
                  <div class="panel-body"><p>'.$nachricht.'</p></div>
                </div>
              ';
            }
        	}

          if(isset($_POST['orders'])) {

            $all_orders = $connect->prepare("SELECT * FROM karten ORDER BY postdate ASC");
            $all_orders->execute();
            $result = $all_orders->get_result();

            echo '
            	<table class="table admintable">
            		<tr>
	            		<th class="at1">Name</th>
	            		<th class="at2">Email</th>
	            		<th class="at3">Nachricht</th>
	            		<th class="at4">Anzahl</th>
	            		<th class="at5">Datum</th>
	            		<th class="at6">Löschen</th>
	            	</tr>
	            ';
            while($row = mysqli_fetch_array($result)) {
              $id = $row[0];
	            $name = $row[1];
	            $email = $row[2];
	            $message = $row[3];
	            $amount = $row[4];
	            $date = $row[5];

	            echo '
	            	<tr>
	            		<td class="at1">'.$name.'</td>
	            		<td class="at2">'.$email.'</td>
	            		<td class="at3">'.$message.'</td>
	            		<td class="at4">'.$amount.'</td>
	            		<td class="at5">'.$date.'</td>
	            		<td class="at6"><form action="admin.php" method="post" style="display: inline-block;"><button name="delete_reservation" value="'.$id.'" class="btn btn-xs btn-danger">Löschen</button></form></td>
	            	</tr>
	            ';
            } 
            echo '</table>';
          }
          }
          ?>
      </div>
    </div>
    </div>

  <!--####### Back-to-top #######-->
   <a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

  <!--####### Footer #######-->
   <div class="container">
      <hr>

      <footer>
        <p>&copy; Nostix Code 2k17 | <a href="impressum.php">Impressum</a> | <a href="admin.php">Admin-Bereich</a></p>
      </footer>
    </div> <!-- /container -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
   </div>
    </body>
</html>
