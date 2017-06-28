<!--
/********************************************************
* Dateiname: mail.php
* Autor: Nostix Code
* letzte Aenderung: 28.06.2017
* Inhalt: Kontakt mail senden
*
* Verwendete Funktionen (aus anderen Dateien):
*   /
*   
*
* Definierte Funktionen:
*   /
********************************************************/
-->
<?php
  // Variablen
  $MeineEmail = 'mail@nostix.de';
  $Name = $_POST['Name'];
  $NutzerEmail = $_POST['Email'];
  $Nachricht = $_POST['Nachricht'];
  $An = $myemail;
  $Betreff = 'Nachricht von Kontaktformular: '.$Name;
  $EmailNachricht = "Es wurde eine Nachricht gesendet von: ".$Name."\r\n \r\nEmail: ".$NutzerEmail."\r\n \r\nNachricht: \r\n".$Nachricht;
  // Mail senden
  mail($An, $Betreff, $EmailNachricht);
  sleep(1);
  // Erfolg, Umleiten
  header("Location:kontakt.php?mailsent");
?>