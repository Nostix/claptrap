<?php
$myemail = 'mail@nostix.de';
$name = $_POST['name'];
$email_adresse = $_POST['email'];
$nachricht = $_POST['nachricht'];
$an = $myemail;
$betreff = 'Nachricht von Kontaktformular: '.$name;
$nachricht = 'Es wurde eine Nachricht gesendet von: '.$name.'<br>Email: '.$email_adresse.'<br>Nachricht: '.$nachricht;
$header = "From: ".$myemail.'\n Reply-To: '.$email_adresse;
echo "test";
mail($an, $betreff, $nachricht, $header);
sleep(1);
header("Location:/index.html");
?>