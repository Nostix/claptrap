$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
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

function calculate() {
        var myBox1 = document.getElementById('ticket').value;   
        var myBox2 = document.getElementById('amount').value;
        var result = document.getElementById('price');  
        var myResult = myBox1 * myBox2;
        result.innerHTML = 'Ticketpreis: ' + myResult + '€';
      }