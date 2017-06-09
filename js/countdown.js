var countDownDate = new Date ("Jul 4, 2017 18:30:00").getTime();

var now = new Date().getTime();
var distance = countDownDate - now;

var days = Math.floor(distance / (1000*60*60*24));
var hours = Math.floor((distance % (1000*60*60*24)) / (1000*60*60));
var minutes = Math.floor((distance % (1000*60*60)) / (1000*60));

document.getElementById("countdown").innerHTML = "Zähle mit uns:<table class='countdown'><tr><td>" + days + "</td><td>" + hours + "</td><td>" + minutes + "</td></tr><tr><td> Tage </td><td> Stunden </td><td> Minuten </td></tr></table>";

if (distance < 0 ) {
	clearInterval(x);
	document.getElementById("countdown").innerHTML = "Die Party läuft bereits!"
}

var x = setInterval(function() {

	var now = new Date().getTime();
	var distance = countDownDate - now;

	var days = Math.floor(distance / (1000*60*60*24));
	var hours = Math.floor((distance % (1000*60*60*24)) / (1000*60*60));
	var minutes = Math.floor((distance % (1000*60*60)) / (1000*60));

	document.getElementById("countdown").innerHTML = "Zähle mit uns:<table class='countdown'><tr><td>" + days + "</td><td>" + hours + "</td><td>" + minutes + "</td></tr><tr><td> Tage </td><td> Stunden </td><td> Minuten </td></tr></table>";

	if (distance < 0 ) {
		clearInterval(x);
		document.getElementById("countdown").innerHTML = "Die Party läuft bereits!"
	}

},60000);