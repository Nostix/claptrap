/********************************************************
* Dateiname: countdown.js
* Autor: Nostix Code
* letzte Aenderung: 28.06.2017
* Inhalt: Startseiten Countdown
*
* Verwendete Funktionen (aus anderen Dateien):
*   /
*   
*
* Definierte Funktionen:
*   setInterval(function()
********************************************************/
// Datum de Veranstaltung festlegen
var countDownDate = new Date ("Jul 4, 2017 18:30:00").getTime();
// Abstand vom jetzigen Zeitpunkt bis zur Veranstaltung errechnen
var now = new Date().getTime();
var distance = countDownDate - now;
// Tage, Stunden, Minuten und Sekunden errechnen
var days = Math.floor(distance / (1000*60*60*24));
var hours = Math.floor((distance % (1000*60*60*24)) / (1000*60*60));
var minutes = Math.floor((distance % (1000*60*60)) / (1000*60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);
// In HTML einfügen
document.getElementById("countdown").innerHTML = "Zähle mit uns:<table class='countdown'><tr><td>" + days + "</td><td>" + hours + "</td><td>" + minutes + "</td><td>" + seconds + "</td></tr><tr><td> Tage </td><td> Stunden </td><td> Minuten </td><td> Sekunden </td></tr></table>";
// Text der erscheint wenn Veranstaltung schon stattgefunden hat
if (distance < 0 )
{
  clearInterval(x);
  document.getElementById("countdown").innerHTML = "Die Party läuft bereits!"
}
// Aktualisierungsintervall des Countdowns auf 1 Sekunde gesetzt
var x = setInterval(function()
{

  var now = new Date().getTime();
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000*60*60*24));
  var hours = Math.floor((distance % (1000*60*60*24)) / (1000*60*60));
  var minutes = Math.floor((distance % (1000*60*60)) / (1000*60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("countdown").innerHTML = "Zähle mit uns:<table class='countdown'><tr><td>" + days + "</td><td>" + hours + "</td><td>" + minutes + "</td><td>" + seconds + "</td></tr><tr><td> Tage </td><td> Stunden </td><td> Minuten </td><td> Sekunden </td></tr></table>";

  if (distance < 0 )
  {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "Die Party läuft bereits!"
  }

},1000);