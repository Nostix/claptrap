<!--
/********************************************************
* Dateiname: reservemail.php
* Autor: Nostix Code
* letzte Aenderung: 28.06.2017
* Inhalt: Kartenreservierungsprozess
*
* Verwendete Funktionen (aus anderen Dateien):
*   /
*   
*
* Definierte Funktionen:
*   /
********************************************************/
-->
<!-- Datenbank verbindung herstellen -->
<?php
  $DB_HOST = 'localhost';
  $DB_BENUTZER = 'php';
  $DB_PASSWORT = 'php';
  $DB_NAME = 'php';
  $DB_Verbindung = mysqli_connect($DB_HOST, $DB_BENUTZER, $DB_PASSWORT, $DB_NAME);
  if(! $DB_Verbindung )
  {
    die('Could not connect: ' . mysql_error());
  }
  // Erstellen der Tabelle falls noch nicht existent
  $DatenbankErstellen = "CREATE TABLE IF NOT EXISTS karten (
            id INTEGER,
            name VARCHAR(100),
            email TEXT,
            message TEXT,
            amount INTEGER,
            postdate VARCHAR(60)
            )";
  mysqli_query( $DB_Verbindung, $DatenbankErstellen);
  // Wenn Parameter gegeben Reservierungsprozess
  if (isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Kartenanzahl']))
  {
    $AlteID = $DB_Verbindung->prepare("SELECT id FROM karten ORDER BY id DESC");
    $AlteID->execute();
    $Ergebnis = $AlteID->get_result();
    // Errechnung der Neuen ID anhand der höchsten schon vorhandenen ID
    if($Ergebnis->num_rows === 0)
    {
      $NeueID = '1';
    }
    else
    {
      $Reihe = mysqli_fetch_array($result);
      $NeueID = ++$Reihe[0];
    }
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Kartenanzahl = $_POST['Kartenanzahl'];
    $Nachricht = $_POST['Nachricht'];
    date_default_timezone_set('Europe/Berlin');
    $Datum = date('d/m/y H:i', time());
    // Eintragen der Reservierung in die Datenbank
    $ZurDatenbankHinzufügen = $DB_Verbindung->prepare("INSERT INTO karten (id, name, email, message, amount, postdate)
    VALUES (?, ?, ?, ?, ?, ?)");
    $ZurDatenbankHinzufügen->bind_param('ssssss', $NeueID,$Name,$Email,$Nachricht,$Kartenanzahl,$Datum);
    $ZurDatenbankHinzufügen->execute();
    //Senden einer Email-Benachrichtigung
    $MeineEmail = 'mail@nostix.de';
    $An = $MeineEmail;
    $Betreff = 'Kartenreservierung von: '.$Name;
    $EmailNachricht = "Es wurde eine Reservierung gesendet von: ".$Name."\r\n \r\nEmail: ".$Email."\r\n \r\nNachricht: \r\n".$Nachricht;
    mail($An, $Betreff, $EmailNachricht);
    sleep(1);
    // Nach Erfolg, Umleitung
    header("Location:reservierung.php?mailsent");
  }
?>