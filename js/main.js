/********************************************************
* Dateiname: main.js
* Autor: Nostix Code
* letzte Aenderung: 28.06.2017
* Inhalt: Back-To-Top, Google Map, Scroll Event
*
* Verwendete Funktionen (aus anderen Dateien):
*   /
*   
*
* Definierte Funktionen:
*   (window).scroll(function (), $('#back-to-top').click(function), function initMap()
********************************************************/

/********************************************************
* Funktion: Back to Top Einblendung
* Beschreibung: Blendet Back to Top Button ein und aus
*
* Verwendete Funktionen (selbst definierte):
*   /
*
* Parameter:
*   Ob die Seite gescrollt wurde, Wie weit die Seite gescrolled wurde
*
* Rückgabewert:
*   integer (Anzahl gescrollter Pixel), boolean (true wenn gescrollt)
********************************************************/
$(document).ready(function()
{
  $(window).scroll(function ()
  {
    // Anzeigen ab
    if ($(this).scrollTop() > 300)
    {
      $('#back-to-top').fadeIn();
    }
    // Ausblenden ab
    else
    {
      $('#back-to-top').fadeOut();
    }
    if ($(this).scrollTop() === 0)
    {
      window.wasScrolled = false;
    }
});

/********************************************************
* Funktion: Back to Top Animation
* Beschreibung: Scrollt die Seite auf Klick wieder nach oben auf 0 Pixel
*
* Verwendete Funktionen (selbst definierte):
*   /
*
* Parameter:
*   /
*
* Rückgabewert:
*   boolean (false für nicht gescrollt)
********************************************************/
$('#back-to-top').click(function ()
{
  $('#back-to-top').tooltip('hide');
  $('body,html').animate({scrollTop: 0}, 800);
  return false;
}
);
$('#back-to-top').tooltip('show');

});

/********************************************************
* Funktion: Google Map
* Beschreibung: Initiiert die Google Map
*
* Verwendete Funktionen (selbst definierte):
*   /
*
* Parameter:
*   location (Ort den die Map anzeigen soll)
*   mapCanvas (Element in dem die Map dargestellt werden soll)
*   mapOptions (Optionen für die Darstellung der Map)
*   map (Initiierung der Map)
*   markerImage (Pfad zum Bild des Markers zur Positionsmarkierung)
*   marker (Initiierung des Markers)
*
* Rückgabewert:
*   /
********************************************************/
if (document.getElementById('map'))
{
  $(function ()
  {
    function initMap()
    {

      var location = new google.maps.LatLng(53.756302, 9.673706);

      var mapCanvas = document.getElementById('map');
      var mapOptions = {
          center: location,
          zoom: 14,
          panControl: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(mapCanvas, mapOptions);

      var markerImage = '../img/marker.png';

      var marker = new google.maps.Marker({
          position: location,
          map: map,
          icon: markerImage
      });
    }
  // Endgültige Darstellung der Map
  google.maps.event.addDomListener(window, 'load', initMap);
  });
}

/********************************************************
* Funktion: Scroll zum ersten Element
* Beschreibung: Scrollt auf der Startseite zum ersten Element, wenn noch nicht gescrollt wurde
*
* Verwendete Funktionen (selbst definierte):
*   /
*
* Parameter:
*   wasScrolled (Gibt an ob gescrollt wurde oder nicht)
*
* Rückgabewert:
*   /
********************************************************/
if (document.getElementById('ScrollFunktion'))
{
  window.wasScrolled = false;
  $(window).bind('scroll',function()
  {
    // Wenn nicht gescrollt wurde, beim ersten scrollen zum ersten Element Scrollen
    if (!window.wasScrolled)
    {
      $('html, body').animate({scrollTop:document.getElementById('ScrollFunktion').getBoundingClientRect().top},1000)
    }
    window.wasScrolled = true;
  })
}