<?php
$myemail = 'mail@nostix.de';
$name = $_POST['name'];
$email_adresse = $_POST['email'];
$nachricht = $_POST['nachricht'];
$an = $myemail;
$betreff = 'Nachricht von Kontaktformular: '.$name;
$nachricht = "Es wurde eine Nachricht gesendet von: ".$name."\r\n \r\nEmail: ".$email_adresse."\r\n \r\nNachricht: \r\n".$nachricht;
$header = "From: ".$myemail."\r\n Reply-To: ".$email_adresse;
mail($an, $betreff, $nachricht, $header);
sleep(1);
header("Location:/kontakt.php?mailsent");
?>