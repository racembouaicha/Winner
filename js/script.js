var countDownDate = new Date("dec 6, 2021 21:40:30").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.querySelector("#counter ").innerHTML = days + " Day " + hours + " Hours " +
        minutes + " Minutes " + seconds + "Seconds ";

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.querySelector("#counter").innerHTML = "";
        winner.style.display = 'block';

        document.getElementById('send').disabled = true;
    }
}, 1000);