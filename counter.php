<!--
/********************************************************
* Dateiname: counter.php
* Autor: Nostix Code
* letzte Aenderung: 29.06.2017
* Inhalt: Besucherzähler
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
  //oeffnet die deatei counter.txt
  $counter_name = "counter.txt";

  //lesen des jetztigen Wertes des Counters
  $file = fopen($counter_name, "r"); //read
  $counterVal = fgets($file);
  fclose($file);

  //wurde der Counter mit der jetzigen Session bereits erhoeht
  //wenn nicht erhoehen
  if(!isset($_SESSION['hasVisited']))
  {
    $_SESSION['hasVisited'] = "yes";
    $counterVal++;
    $file = fopen($counter_name, "w"); //write
    fwrite($file, $counterVal);
    fclose($file);
  }

  echo "<p id='Besucherzaehler'>Besucher: ".$counterVal."</p>";
?>