<!--
/********************************************************
* Dateiname: guestbook.php
* Autor: Nostix Code
* letzte Aenderung: 28.06.2017
* Inhalt: Gästebuch
*
* Verwendete Funktionen (aus anderen Dateien):
*   (window).scroll(function (), $('#back-to-top').click(function), window.cookieconsent.initialise()
*   
*
* Definierte Funktionen:
*   /
********************************************************/
-->
<!-- Datenbank verbindung herstellen -->
<?php session_start(); 
  $DB_HOST = 'localhost';
  $DB_BENUTZER = 'php';
  $DB_PASSWORT = 'php';
  $DB_NAME = 'php';
  $DB_Verbindung = mysqli_connect($DB_HOST, $DB_BENUTZER, $DB_PASSWORT, $DB_NAME);
  if(! $DB_Verbindung )
  {
    die('Could not connect: ' . mysql_error());
  }
  // Datenbank erstellen falls noch nichts existent
  $DatenbankErstellen = "CREATE TABLE IF NOT EXISTS guestbook (
              id INTEGER,
              name VARCHAR(100),
              entry TEXT,
              postdate VARCHAR(60)
              )";
  mysqli_query( $DB_Verbindung, $DatenbankErstellen);
  // Überprüfen ob Parameter gegeben sind
  if (isset($_POST['Name']) && isset($_POST['Nachricht']))
  {
    // Errechnung der neuen ID aus der letzten ID
    $AlteID = $DB_Verbindung->prepare("SELECT id FROM guestbook ORDER BY id DESC");
    $AlteID->execute();
    $Ergebnis = $AlteID->get_result();

    if($Ergebnis->num_rows === 0) {
      $NeueID = '1';
    }
    else
    {
      $Reihe = mysqli_fetch_array($Ergebnis);
      $NeueID = ++$Reihe[0];
    }

    $Name = $_POST['Name'];
    $Nachricht = $_POST['Nachricht'];
    date_default_timezone_set('Europe/Berlin');
    $Datum = date('d/m/y H:i', time());
    // Schreiben des Gästebucheintrages in die Datenbank
    $ZurDatenbankHinzufuegen = $DB_Verbindung->prepare("INSERT INTO guestbook (id, name, entry, postdate)
    VALUES (?, ?, ?, ?)");
    $ZurDatenbankHinzufuegen->bind_param('ssss', $NeueID,$Name,$Nachricht,$Datum);
    $ZurDatenbankHinzufuegen->execute();
  }
?>
<!doctype html>
<html>
  <head>
    <title>Gästebuch</title>

    <meta charset="utf-8">
    <meta name="description" content="Trapfestival">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon" />
		<link rel="icon" href="img/logo.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script src="js/cookies.js"></script>
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
    <div class="Besucherzaehler">
      <img class="Besucherhintergrund" src="img/overlaybesucherzahler.png">
      <?php include ("counter.php"); ?>
    </div>
    <div class="container">
      <div class="panel panel-transparent">
        <div class="panel-heading">
          <h3>G&auml;stebuch</h3>
        </div>
        <div class="panel-body">
        <?php
          // Darstellung von Einträgen un Button wenn der Button nicht gedrückt wurde
          if (!isset($_POST['schreiben']))
          { ?>
            <!-- Button mit Post übermittlung zum schreiben von Einträgen -->
            <form action="guestbook.php" method="post">
              <button type="submit" name="schreiben" class="btn btn-primary">Eintrag schreiben</button>
            </form><br><br>
            <?php
            // Darstellung aller Gästebucheinträge sortiert nach Datum, neuste zuerst
            $AlleEintraege = $DB_Verbindung->prepare("SELECT * FROM guestbook ORDER BY postdate DESC");
            $AlleEintraege->execute();
            $Ergebnis = $AlleEintraege->get_result();

            while($Reihe = mysqli_fetch_array($Ergebnis)) {
              $Name = $Reihe[1];
              $Nachricht = $Reihe[2];
              $Datum = $Reihe[3];

              echo '

                <div class="panel panel-transparent">
                  <div class="panel-heading">
                    <div class="Gaestebuch_Titel">'.$Name.'</div><div class="Gaestebuch_Titel Datum">'.$Datum.'</div>
                  </div>
                  <div class="panel-body"><p>'.$Nachricht.'</p></div>
                </div>
              ';
            } 
          }
          //Darstellung des Formulars zum schreiben von Einträgen wenn Button gedrückt wurde
          if (isset($_POST['schreiben']))
          { ?>
            <form action="/guestbook.php" method="post">
              <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" name="Name" id="Name" placeholder="Name" maxlength="31" style="width: 250px;"><br>
                <label for="Nachricht">Nachricht</label>
                <textarea class="form-control" name="Nachricht" id="Nachricht" rows="5" maxlength="765" placeholder='Schreibe hier deinen Gästebucheintrag.'></textarea><br>
                <button type="submit" class="btn btn-success">Senden</button>
              </div>
            </form>
            <?php
          } ?>
        </div>
      </div>
      <a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
      <hr>
      <footer>
        <p>&copy; Nostix Code 2k17 | <a href="impressum.php">Impressum</a> | <a href="admin.php">Admin-Bereich</a></p>
      </footer>
    </div>
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
