/********************************************************
* Dateiname: cookies.js
* Autor: https://cookieconsent.insites.com/
* letzte Aenderung: 28.06.2017
* Inhalt: Cookie Benachrichtigung
*
* Verwendete Funktionen (aus anderen Dateien):
*   /
*   
*
* Definierte Funktionen:
*   window.cookieconsent.initialise()
********************************************************/
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#252e39"
    },
    "button": {
      "background": "transparent",
      "text": "#14a7d0",
      "border": "#14a7d0"
    }
  },
  "content": {
    "message": "Diese Webseite verwendet Cookies, um die bestmögliche Benutzung zu ermöglichen.",
    "dismiss": "Verstanden!",
    "link": "Mehr über Cookies"
  }
})});