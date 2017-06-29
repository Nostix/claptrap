<!--
/********************************************************
* Dateiname: impressum.php
* Autor: Nostix Code
* letzte Aenderung: 29.06.2017
* Inhalt: Impressum
*
* Verwendete Funktionen (aus anderen Dateien):
*   (window).scroll(function (), $('#back-to-top').click(function), window.cookieconsent.initialise()
*   
*
* Definierte Funktionen:
*   /
********************************************************/
-->
<?php session_start(); ?>
<!doctype html>
<html>
  <head>
    <title>Impressum</title>
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
  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
      <!-- Navigation für Mobile Geräte -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Claptrap</a>
        </div>
        <!-- Eigentliche Navigation -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="about.php">Band</a></li>
            <li><a href="anfahrt.php">Anfahrt</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            <li><a href="guestbook.php">G&auml;stebuch</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Besucherzähler -->
    <div class="Besucherzaehler">
      <img class="Besucherhintergrund" src="img/overlaybesucherzahler.png">
      <?php include ("counter.php"); ?>
    </div>
    <div class="container">
      <div class="panel panel-transparent">
        <div class="panel-heading">
          <h3>Impressum</h3>
        </div>
        <!-- Impressumstext -->
        <div class="panel-body">
          <h2>Allgemeine Absichtserklärung</h2>
          <p>Auf bestimmten Unterseiten unseres Webangebotes werdet Ihr um personenbezogene Informationen [Z.B. Name und E-Mailadresse] gebeten, um von uns Unterstützung zu erhalten bzw. unsere offerierten Dienstleistungen in Anspruch nehmen zu können. Indem Ihr Eure Angaben in den entsprechenden Feldern eintragt, ermöglicht Ihr uns die Bereitstellung der ausgewählten Leistungen. Wir werden alle personenbezogenen Daten, die Ihr auf diese Weise übermittelt, in Einklang mit dieser Erklärung behandeln. Unsere Leistungen sind so ausgelegt, dass Ihr die gewünschten Informationen erhaltet. Wir handeln im Einklang mit der aktuellen Rechtslage und sind bemüht um die Einhaltung der aktuellen Best Practice im Internet.<br />Im Allgemeinen werden alle uns von Euch übermittelten Angaben nur verwendet, um Euch technische Unterstützung bereitzustellen oder um Euch unseren höchstmöglichen Leistungsstandard zu sichern. </p>

          <h2>Nutzungsdaten</h2>
          <p>Um unsere Webseite fortlaufend inhaltlich, technisch und strukturell zu optimieren, speichern wir zu rein analysetechnischen Zwecken Daten über einzelne Zugriffe auf unsere Webseite. Hierbei werden folgende Daten erfasst: Die Typbeschreibung des verwendeten Webbrowsers, die anfordernde Seite, der Dateiname, Datum und die Uhrzeit der Anfrage, die übertragene Datenmenge, der Zugriffsstatus (Datei übertragen, Datei nicht übertragen) und die anonymisierte  IP-Adresse des anfragenden Rechners [verkürzt um die letzten drei Stellen]. Alle zuvor aufgeführten Daten werden gemäß Telemediengesetz (TMG) anonymisiert gespeichert. Die Anlegung eines personenbezogenen Nutzerprofils ist nicht möglich, ausgenommen zu Zwecken des bargeldlosen Zahlungsverkehrs auf dem Festival.</p>

          <h2>Speicherung personenbezogener Daten</h2>
          <p>Wir speichern die personenbezogenen Daten nur solange Euch die gewünschten Leistungen nutzen. Nach der Zweckerfüllung / Leistungserbringung werden Eure Daten gelöscht. Alle übermittelten personenbezogenen Daten werden sicher und in Einklang mit der geltenden Datenschutzgesetzgebung gespeichert. Wir sind bemüht, Eure personenbezogenen Daten durch Ergreifung aller technischen und organisatorischen Möglichkeiten so zu speichern, dass sie für Dritte nicht zugänglich sind. Diese Regelungen gelten gleichermaßen für die mit der Durchführung und Abwicklung des bargeldlosen Zahlungsverkehrs auf dem Festival beauftragten Dienstleister. Bei der Kommunikation per E Mail kann die vollständige Datensicherheit unsererseits nicht gewährleistet werden. Wir empfehlen Euch bei der Übermittlung von vertraulichen Informationen den Postweg.</p>

          <h2>Kinder</h2>
          <p>Personen unter 18 Jahren sollten ohne Zustimmung der Eltern oder Erziehungsberechtigten keine personenbezogenen Daten an uns übermitteln. Wir fordern keine personenbezogenen Daten von Kindern und Jugendlichen an, sammeln diese nicht und geben sie nicht an Dritte weiter.</p>

          <h2>Foto- und Filmaufnahmen</h2>
          <p>Auf dem Festival werden durch die Medien, von Festivalsponsoren und/oder durch den Veranstalter Foto- und Filmaufnahmen erstellt, vervielfältigt und genutzt, z.B. für aktuelle Berichterstattungen bzw. Dokumentationen, die via Print, DVD, TV und/oder Internet (z.B. Homepage, Facebook etc) verbreitet werden. Mit dem Betreten des Festivalgeländes erklärt sich jeder Besucher des Festivals damit einverstanden, dass diese Aufnahmen auch die Person des Besuchers abbilden und für die vorgenannten Zwecke entschädigungslos genutzt werden dürfen.</p>

          <h2>Auskunftsrecht </h2>
          <p>Ihr habt jederzeit das Recht auf Auskunft über die bezüglich Eurer Person gespeicherten Daten, deren Herkunft und Empfänger sowie den Zweck der Datenverarbeitung. Auskunft über die gespeicherten Daten könnt Ihr unter anfordern.</p>

          <h2>Datenschutzbeauftragter</h2>
          <p>Wenn Sie Fragen zum Datenschutz bzw. der Datenschutzerklärung haben oder wenn Sie zu einem Punkt betreffend den Datenschutz vertiefte Informationen wünschen, wenden Sie sich bitte jederzeit an unseren Datenschutzbeauftragten: <a href="mailto:mhurt3@gmail.com">mhurt3@gmail.com</a></p>

          <p>
            Marven Hurt<br />
            Straße 12a<br />
            22765 Hamburg<br />
            <a href="mailto:mhurt3@gmail.com">mhurt3@gmail.com </a>
          </p>
        </div>
      </div>
      <!-- Back to Top Button -->
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
