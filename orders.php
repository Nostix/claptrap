<!doctype html>
<?php
	define('include', TRUE);
		include_once 'session.php';
		include_once 'db_connect.php';
		include_once 'check.php';
        if(isset($_POST["name"])&&isset($_POST["lastname"])&&isset($_POST["email"])&&isset($_POST["adress"])&&isset($_POST["adressnumber"])&&isset($_POST["zipcode"])&&isset($_POST["city"])&&isset($_POST["ticket"])&&isset($_POST["amount"])&&isset($_POST["password"])) {
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $password = $_POST['password'];
            $email = $_POST["email"];
            $adress = $_POST["adress"];
            $adressnumber = $_POST["adressnumber"];
            $city = $_POST["city"];
            $zipcode = $_POST["zipcode"];
            $ticket = $_POST["ticket"];
            $amount = $_POST["amount"];
            $password_encrypt = password_hash($password, PASSWORD_BCRYPT);

            $kundennummer = rand(10000000, 99999999);
            $user_check = $connect->prepare("SELECT kdnr FROM users WHERE kdnr LIKE ?");
            $user_check->bind_param('s', $kundennummer);
            $user_check->execute();
            $result = $user_check->get_result();
            $sresult = $result->fetch_assoc();
            if(is_array($sresult)) {
                $kundennummer = rand(10000000, 99999999);
            }

            $id_query = "SELECT id FROM users ORDER BY id DESC LIMIT 1";
            $result_id = mysqli_query( $connect,$id_query);
            $idru = mysqli_fetch_row( $result_id);
            $userid = ++$idru[0];

            $register_query = $connect->prepare("INSERT INTO users (id, kdnr, pw, name, lastname, email, adress, adressnumber, city, zipcode, ticket, amount, shipping, admin)
            VALUES ('{$userid}', '{$kundennummer}', '{$password_encrypt}', ?, ?, ?, ?, ?, ?, ?, ?, ?, 'Bestellung eingegangen' , '0')");
            $register_query->bind_param('sssssssss', $name,$lastname,$email,$adress,$adressnumber,$city,$zipcode,$ticket,$amount);
            $register_query->execute();

            $ad_check = $connect->prepare("SELECT admin FROM users WHERE kdnr LIKE ?");
            $ad_check->bind_param('s', $kundennummer);
            $ad_check->execute();
            $ad_result = $ad_check->get_result();
            $ad_sresult = $ad_result->fetch_assoc();
            if(is_array($ad_sresult)) {
                $_SESSION['current_admin'] = implode($ad_sresult);
            }
            $_SESSION['logged_in'] = true;
            $_SESSION['kdnr'] = $kundennummer;
        }
		if(!isset($_SESSION['logged_in'])) {
			if(isset($_POST["kdnr"])) {
				$kdnr = $_POST["kdnr"];
			}
			if(isset($_POST["password"])) {
				$password = $_POST["password"];
			}
		}
		if(isset($kdnr)) {

			$user_check = $connect->prepare("SELECT kdnr FROM users WHERE kdnr LIKE ?");
			$user_check->bind_param('s', $kdnr);
			$user_check->execute();
			$user_result = $user_check->get_result();
			$user_sresult = $user_result->fetch_assoc();
			if(is_array($user_sresult)) {
				$ru = implode($user_sresult);
			}
			else {
				$ru = '';
			}

			$pw_check = $connect->prepare("SELECT pw FROM users WHERE kdnr LIKE ?");
			$pw_check->bind_param('s', $kdnr);
			$pw_check->execute();
			$pw_result = $pw_check->get_result();
			$pw_sresult = $pw_result->fetch_assoc();
			if(is_array($pw_sresult)) {
			$rpwe = implode($pw_sresult);
			}
			else {
				$rpwe = '';
			}

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

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Claptrap</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

                              <?php
                        if(!isset($_SESSION['logged_in'])) {
                            if(isset($_POST['kdnr'])) {
                                if($ru==$kdnr) {
                                    if(isset($password)) {
                                        if(password_verify($password, $rpwe)) {
                                            echo '<div class="navbar-form navbar-right"><a href="/logout.php"><button class="btn btn-danger">Logout</button></a></div>';
                                        }
                                        else {
                                            Header("Location: /index.php");
                                        }
                                    }
                                    else {
                                        Header("Location: /index.php");
                                    }
                                }
                                else {
                                    Header("Location: /index.php");
                                }
                            }
                            else {
                                Header("Location: /index.php");
                            }
                        }
                        else {
                            echo '<div class="navbar-form navbar-right"><a href="/logout.php"><button class="btn btn-danger">Logout</button></a></div>';
                        }
                    ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="container">

        <div class="panel panel-primary panel-transparent">
            <div class="panel-heading">
                <h3 class="panel-title">Deine Bestellungen</h3>
            </div>
            <div class="panel-body">
                                    <?php
                        if(!isset($_SESSION['logged_in'])) {
                            if(isset($_POST['kdnr'])) {
                                if($ru==$kdnr) {
                                    if(isset($password)) {
                                        if(password_verify($password, $rpwe)) {
                                            $_SESSION['logged_in'] = true;
                                            $_SESSION['kdnr'] = $kdnr;
                                            $id_check = $connect->prepare("SELECT id FROM users WHERE kdnr LIKE ?");
                                            $id_check->bind_param('s', $kdnr);
                                            $id_check->execute();
                                            $id_result = $id_check->get_result();
                                            $id_sresult = $id_result->fetch_assoc();
                                            if(is_array($id_sresult)) {
                                                $_SESSION['current_id'] = implode($id_sresult);
                                            }
                                            else {
                                                echo '<div class="alert alert-danger" role="alert"><strong>Something went wrong!</strong> The current user id could not be retrieved.</div><br>';
                                            }
                                            $ad_check = $connect->prepare("SELECT admin FROM users WHERE kdnr LIKE ?");
                                            $ad_check->bind_param('s', $kdnr);
                                            $ad_check->execute();
                                            $ad_result = $ad_check->get_result();
                                            $ad_sresult = $ad_result->fetch_assoc();
                                            if(is_array($ad_sresult)) {
                                                $_SESSION['current_admin'] = implode($ad_sresult);
                                            }
                                            include 'main.php';
                                        }
                                        else {
                                            echo '<div class="alert alert-danger" role="alert"><strong>Login failed!</strong> The password is not valid. Please try again.</div><br>';
                                        }
                                    }
                                    else {
                                        echo '<div class="alert alert-danger" role="alert"><strong>Please login!</strong> You can only view this page, if you are logged in.</div><br>';
                                    }
                                }
                                else {
                                    echo '<div class="alert alert-danger" role="alert"><strong>Login failed!</strong> The username is not valid. Please try again.</div><br>';
                                }
                            }
                            else {
                                echo '<div class="alert alert-danger" role="alert"><strong>Please login!</strong> You can only view this page, if you are logged in.</div><br>';                              
                            }
                        }
                        else {
                            include'main.php';
                        }
                    ?>
            </div>
        </div>
      
      <a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

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