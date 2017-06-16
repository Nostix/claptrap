//Back to Top
$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
            if ($(this).scrollTop() === 0) {
                window.wasScrolled = false;
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});
//Googlemaps
if (document.getElementById('map')) {
    $(function () {

    function initMap() {

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
    google.maps.event.addDomListener(window, 'load', initMap);
});
}





//Scroll to first element
if (document.getElementById('firstelement')) {
window.wasScrolled = false;
    $(window).bind('scroll',function(){
        if (!window.wasScrolled) {
            $('html, body').animate({scrollTop:document.getElementById('firstelement').getBoundingClientRect().top},1000)
        }
        window.wasScrolled = true;
    })
}