<!--
/********************************************************
* Dateiname: reservierung.php
* Autor: Nostix Code
* letzte Aenderung: 28.06.2017
* Inhalt: Kartenreservierung
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
  // Datenbank erstellen falls noch nicht existent
  $Datenbank_Erstellen = "CREATE TABLE IF NOT EXISTS karten (
            id INTEGER,
            name VARCHAR(100),
            email TEXT,
            message TEXT,
            amount INTEGER,
            postdate VARCHAR(60)
            )";
  mysqli_query( $DB_Verbindung, $Datenbank_Erstellen);
?>
<!doctype html>
<html>
  <head>
    <title>Karten-Reservierung</title>
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
            <li><a class="active" href="kontakt.php">Kontakt</a></li>
            <li><a href="guestbook.php">G&auml;stebuch</a></li>
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
          <h3>Kartenreservierung</h3>
        </div>
        <div class="panel-body">
          <?php
            // BEstätigung nach Bestellung
            if(isset($_GET['mailsent']))
            {
              echo '<div class="alert alert-success" role="alert"><strong>Danke!</strong> Ihre Reservierung wurde gesendet.</div>';
            }
            // Ausrechnen der verfügbaren Karten anhand der bereits reservierten Karten
            $VerfuegbareKarten = $DB_Verbindung->prepare("SELECT sum(amount) FROM karten");
            $VerfuegbareKarten->execute();
            $Ergebnis = $VerfuegbareKarten->get_result();

            while($Reihe = mysqli_fetch_array($Ergebnis))
            {
              $Summe = $Reihe[0];
            }
            if ($Summe >= 300)
            {
              // Deaktiviertes Formular mit Fehlermeldung bei Ausverkauf der Tickets
              ?>
              <div class="alert alert-danger" role="alert">
                <strong>Tut uns leid!</strong> Die Tickets sind leider ausverkauft.
              </div>
              <form action="reservemail.php" method="post">
                <fieldset disabled>
                  <div class="form-group LoginFormular">
                    <br />
                    <div class="ResponsiveFormularLinks">
                      <label for="Name">Name*</label>
                      <input type="text" class="form-control" name="Name" id="Name" maxlength="40" placeholder="Name" required><br>
                      <label for="Email">Email*</label>
                      <input type="email" class="form-control" name="Email" id="Email" maxlength="70" placeholder="Email-Adresse" required><br>
                    </div>
                    <div class="ResponsiveFormularRechts">
                      <label for="Kartenanzahl">Kartenanzahl*</label>
                      <select class="form-control" name="Kartenanzahl" id="Kartenanzahl" placeholder="Kartenanzahl" required> <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option></select><br>
                      <label for="Nachricht">Nachricht</label>
                      <textarea class="form-control" name="Nachricht" id="Nachricht" rows="5" maxlength="800" placeholder='Schreiben Sie hier ihre Nachricht.'></textarea><br>
                      <button type="submit" class="btn btn-success">Senden</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            <?php
            }
            else
            {
              // Aktiviertes Bestellformular
              ?>
              <p class="Reservierungstext">Hier kannst du Karten reservieren.<br />Sie werden an der Abendkasse auf deinen Namen hinterlegt sein.<br />Dort kannst du sie dann ab zwei Stunden vor Konzertbeginn abholen.<br />Hast du sie allerdings bis 20 Minuten vor Konzertbeginn noch nicht abgeholt, gehen die Tickets wieder in den freien Verkauf.</p>
              <form action="reservemail.php" method="post">
                <div class="form-group LoginFormular">
                  <br />
                  <div class="ResponsiveFormularLinks">
                    <label for="Name">Name*</label>
                    <input type="text" class="form-control" name="Name" id="Name" placeholder="Name" required><br>
                    <label for="Email">Email*</label>
                    <input type="email" class="form-control" name="Email" id="Email" placeholder="Email-Adresse" required><br><br>
                    <!-- Anzeigen der noch verfügbaren Karten -->
                    <p>Es sind noch <strong><?php echo 300 - $Summe; ?> Tickets</strong> verfügbar</p>
                  </div>
                  <div class="ResponsiveFormularRechts">
                    <label for="Kartenanzahl">Kartenanzahl*</label>
                    <select class="form-control" name="Kartenanzahl" id="Kartenanzahl" placeholder="Kartenanzahl" required> <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option></select><br>
                    <label for="Nachricht">Nachricht</label>
                    <textarea class="form-control" name="Nachricht" id="Nachricht" rows="5" placeholder='Schreiben Sie hier ihre Nachricht.'></textarea><br>
                    <button type="submit" class="btn btn-success">Senden</button>
                  </div>
                </div>
              </form>
              *Erforderliche Felder
              <?php
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
