<?php
$dbhost = 'localhost';
$dbuser = 'php';
$dbpass = 'php';
$dbname = 'php';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $connect )
{
  die('Could not connect: ' . mysql_error());
}

$create_database = "CREATE TABLE IF NOT EXISTS karten (
            name VARCHAR(100),
            email TEXT,
            amount INTEGER,
            postdate VARCHAR(60)
            )";
mysqli_query( $connect, $create_database);

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['amount'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $amount = $_POST['amount'];
  date_default_timezone_set('Europe/Berlin');
  $date = date('d/m/y h:i', time());
  $add_query = $connect->prepare("INSERT INTO karten (name, email, amount, postdate)
  VALUES (?, ?, ?, ?)");
  $add_query->bind_param('ssss', $name,$email,$amount,$date);
  $add_query->execute();
}

$myemail = 'mail@nostix.de';
$name = $_POST['name'];
$email_adresse = $_POST['email'];
$anzahl = $_POST['amount'];
$nachricht = $_POST['nachricht'];
$an = $myemail;
$betreff = 'Kartenreservierung von: '.$name;
$nachricht = "Es wurde eine Reservierung gesendet von: ".$name."\r\n \r\nEmail: ".$email_adresse."\r\n \r\nNachricht: \r\n".$nachricht;
$header = "From: ".$myemail."\r\n Reply-To: ".$email_adresse;
mail($an, $betreff, $nachricht, $header);
sleep(1);
header("Location:reservierung.php?mailsent");
?>