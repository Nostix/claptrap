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
	$todelete = $_POST['delete_reservation'];
	$delete = $connect->prepare("DELETE FROM karten WHERE postdate LIKE ?");
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
        <h3>G&auml;stebuch</h3>
      </div>
      <div class="panel-body">
      <?php
          if (!isset($_SESSION['loggedin'])) { ?>
        <form action="admin.php" method="post">
          <label for="name">User</label>
          <input type="text" class="form-control" name="user" id="user" maxlength="40" placeholder="Name" required><br>
          <label for="name">Password</label>
          <input type="password" class="form-control" name="password" id="password" maxlength="40" placeholder="Name" required><br>
          <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form><br><br>
          <?php }
          else { ?>
          	<form action="admin.php" method="post">
          	  <button type="submit" name="logout" class="btn btn-danger">Logout</button>
          	</form>
          	<form action="admin.php" method="post">
          	  <button type="submit" name="guestbook" class="btn btn-primary">Gästebucheintrage</button>
          	</form>
          	<form action="admin.php" method="post">
          	  <button type="submit" name="orders" class="btn btn-primary">Bestellungen</button>
          	</form>
          <?php
          if(isset($_POST['guestbook'])) {

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

        	if(isset($_POST['orders'])) {

$all_orders = $connect->prepare("SELECT * FROM karten ORDER BY postdate ASC");
$all_orders->execute();
$result = $all_orders->get_result();

echo '
	<table class="table">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Nachricht</th>
			<th>Anzahl</th>
			<th>Datum</th>
			<th>Delete</th>
		</tr>
	';
while($row = mysqli_fetch_array($result)) {
	$name = $row[0];
	$email = $row[1];
	$message = $row[2];
	$amount = $row[3];
	$date = $row[4];

	echo '
		<tr>
			<td>'.$name.'</td>
			<td>'.$email.'</td>
			<td>'.$nachricht.'</td>
			<td>'.$amount.'</td>
			<td>'.$date.'</td>
			<td><form action="admin.php" method="post" style="display: inline-block;"><button name="delete_reservation" value="'.$date.'" class="btn btn-xs btn-danger">Delete</button></form></td>
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
        <p>&copy; Nostix Code 2k17 | <a href="impressum.php">Impressum</a></p>
      </footer>
    </div> <!-- /container -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
   </div>
    </body>
</html>
