<!--
/********************************************************
* Dateiname: admin.php
* Autor: Nostix Code
* letzte Aenderung: 28.06.2017
* Inhalt: Adminbereich, Login, Datenbankverwaltung
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
  // Benutzer festlegen
  $ADMIN_BENUTZER = 'admin';
  $ADMIN_PASSWORT = 'admin';
  $ADMIN_VERSCHLUESSELT = password_hash($ADMIN_PASSWORT, PASSWORD_BCRYPT);
  // Überprüfen ob Benutzer und Password eingegeben wurden
  if (isset($_POST['Benutzer']) && isset($_POST['Passwort']))
  {
    $Benutzer = $_POST['Benutzer'];
    $Passwort = $_POST['Passwort'];
    // Wenn ja, Session Cookie setzen
    if (password_verify($Passwort, $ADMIN_VERSCHLUESSELT) && $Benutzer === $ADMIN_BENUTZER)
    {
  	 $_SESSION['Angemeldet'] = 'true';
    }
    // Wenn nein, Session Cookie setzen
    else
    {
  	 $_SESSION['FalscheDaten'] = 'true';
    }
  }
  // Löschvorgang für Reservierungen
  if (isset($_POST['Reservierung_Loeschen']))
  {
    $_POST['Reservierungen'] = 'true';
    $zu_loeschen = $_POST['Reservierung_Loeschen'];
    $loeschen = $DB_Verbindung->prepare("DELETE FROM karten WHERE id LIKE ?");
    $loeschen->bind_param('s', $zu_loeschen);
    $loeschen->execute();
  }
  //Löschvorgang für Gästebucheinträge
  if (isset($_POST['Eintrag_Loeschen']))
  {
    $_POST['Gaestebuch'] = 'true';
    $zu_loeschen = $_POST['Eintrag_Loeschen'];
    $loeschen = $DB_Verbindung->prepare("DELETE FROM guestbook WHERE id LIKE ?");
    $loeschen->bind_param('s', $zu_loeschen);
    $loeschen->execute();
  }
  // Abmeldevorgang
  if (isset($_POST['Abmelden']))
  {
    unset($_SESSION['Angemeldet']);
  }
?>
<!doctype html>
<html>
  <head>
    <title>Admin-Bereich</title>

    <meta charset="utf-8">
    <meta name="description" content="Trapfestival">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
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
          <?php
            if (isset($_SESSION['Angemeldet']))
            {
          ?>
          <div class="Gaestebuch_Titel"><h3>Admin-Bereich</h3></div><form class="Gaestebuch_Titel Datum" action="admin.php" method="post"><button type="submit" name="Abmelden" class="btn btn-danger">Abmelden</button></form>
          <?php
            }
            else
            { 
          ?>
          <h3>Admin-Bereich</h3>
          <?php
            }
          ?>
        </div>
        <div class="panel-body">
          <?php
            // Anzeigen wenn nicht angemeldet
            if (!isset($_SESSION['Angemeldet']))
            { 
              // Anzeigen wenn Session Cookie für falsche Anmeldedaten gesetzt ist
              if(isset($_SESSION['FalscheDaten']))
              {
          		  echo '<div class="alert alert-danger" role="alert"><strong>Falsche Anmeldedaten!</strong> Bitte versuchen Sie es erneut, mit den richtigen Anmeldedaten.</div>';
          		  unset($_SESSION['FalscheDaten']);
              }
          ?>
          <!-- Anmeldeformular -->
          <form action="admin.php" method="post">
            <div class="form-group LoginFormular">
              <div class="ResponsiveFormularLinks admintext">
                <p>Falls Sie Administrator sind, können Sie sich hier anmelden.<br>Anderenfalls kehren Sie bitte <a href="index.php">hier</a> zur Startseite zurück.</p>
                <p>Vielen Dank</p>
              </div>
              <div class="ResponsiveFormularRechts">
                <label for="name">Benutzer</label>
                <input type="text" class="form-control" name="Benutzer" id="Benutzer" maxlength="40" placeholder="Benutzer" required><br>
                <label for="name">PassworT</label>
                <input type="password" class="form-control" name="Passwort" id="Passwort" maxlength="40" placeholder="Passwort" required><br>
                <button type="submit" class="btn btn-primary">Anmelden</button>
              </div>
            </div>
          </form><br /><br />
          <?php
            }
            else
            { 
            ?>
              <!-- Auswahlformular für die Bearbeitung -->
              <p>Wählen Sie aus, was Sie bearbeiten wollen:
              <form action="admin.php" method="post">
                <button type="submit" name="Gaestebuch" class="btn btn-primary">Gästebucheintrage</button>
              </form><br />
              <form action="admin.php" method="post">
                <button type="submit" name="Reservierungen" class="btn btn-primary">Bestellungen</button>
              </form><br />
              <?php
              // Anzeigen wenn Gästebuch bearbeitet werden soll
              if(isset($_POST['Gaestebuch']))
              {
                // Alle Einträge aus Gästebuch datenbank abrufen, neuste zuerst
                $Alle_Eintraege = $DB_Verbindung->prepare("SELECT * FROM guestbook ORDER BY id DESC");
                $Alle_Eintraege->execute();
                $Ergebnis = $Alle_Eintraege->get_result();
                // Für jeden Eintrag folgendes HTML mit spezifischen Variablen ausgeben
                while($Reihen = mysqli_fetch_array($Ergebnis))
                {
                  $ID = $Reihen[0];
                  $Name = $Reihen[1];
                  $Nachricht = $Reihen[2];
                  $Datum = $Reihen[3];

                  echo '

                    <div class="panel panel-transparent">
                      <div class="panel-heading">
                        <div class="Gaestebuch_Titel">'.$Name.'</div><div class="Gaestebuch_Titel Datum"><span id="GaestebuchDatum">'.$Datum.' </span><form action="admin.php" method="post" style="display: inline-block;"><button name="Eintrag_Loeschen" value="'.$ID.'" class="btn btn-xs btn-danger">Löschen</button></form>
                        </div>
                      </div>
                      <div class="panel-body">
                        <p>'.$Nachricht.'</p>
                      </div>
                    </div>
                  ';
                }
              }
              // Anzeigen wenn Reservierungen bearbeitet werden sollen
              if(isset($_POST['Reservierungen']))
              {
                // Alle Reservierungen aus der Datenbank abrufen, neuste zuerst
                $Alle_Reservierungen = $DB_Verbindung->prepare("SELECT * FROM karten ORDER BY id DESC");
                $Alle_Reservierungen->execute();
                $Ergebnis = $Alle_Reservierungen->get_result();
                // Tabellenanfang zur Darstellung aller Reservierungen ausgeben
                echo '
                  <table class="table admintable">
            		    <tr>
	            	      <th class="AdminTabelleZelle1">Name</th>
	            	      <th class="AdminTabelleZelle2">Email</th>
	            	      <th class="AdminTabelleZelle3">Nachricht</th>
	            	      <th class="AdminTabelleZelle4">Anzahl</th>
	            	      <th class="AdminTabelleZelle5">Datum</th>
	            	      <th class="AdminTabelleZelle6">Löschen</th>
                    </tr>
                ';
                // Für jede Reservierung folgendes HTML ausgeben mit spezifischen Variablen
                while($Reihen = mysqli_fetch_array($Ergebnis)) {
                  $ID = $Reihen[0];
                  $Name = $Reihen[1];
                  $Email = $Reihen[2];
                  $Nachricht = $Reihen[3];
                  $KartenAnzahl = $Reihen[4];
                  $Datum = $Reihen[5];

                  echo '
                  	<tr>
                  		<td class="AdminTabelleZelle1">'.$Name.'</td>
                  		<td class="AdminTabelleZelle2">'.$Email.'</td>
                  		<td class="AdminTabelleZelle3">'.$Nachricht.'</td>
                  		<td class="AdminTabelleZelle4">'.$KartenAnzahl.'</td>
                  		<td class="AdminTabelleZelle5">'.$Datum.'</td>
                  		<td class="AdminTabelleZelle6"><form action="admin.php" method="post" style="display: inline-block;"><button name="Reservierung_Loeschen" value="'.$ID.'" class="btn btn-xs btn-danger">Löschen</button></form></td>
                  	</tr>
                  ';
                }
                // Tabeller wieder schließen
                echo '</table>';
              }
            }
          ?>
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
