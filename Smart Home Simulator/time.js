function currentTime() {
    var date = new Date();            // create object of Date class
    var hour = date.getHours();       // current hour
    if (hour < 10) hour = "0" + hour; // add leading zero
    var min = date.getMinutes();      // current minutes
    if (min < 10) min = "0" + min;    // add leading zero
    var sec = date.getSeconds();      // current seconds
    if (sec < 10) sec = "0" + sec;    // add leading zero

    // Time of day
    if (hour >= 0 && hour < 12) {                           // if between 12am and 11:59am
        document.getElementById("timeOfDay").innerHTML = 
        hour + ":" + min + ":" + sec;
    } else if (hour >= 12 && hour < 17) {                   // if between 12pm and 5:00pm
        document.getElementById("timeOfDay").innerHTML = 
        hour + ":" + min + ":" + sec;
    } else {                                                // else between 5:01pm and 11:59pm
        document.getElementById("timeOfDay").innerHTML = 
        hour + ":" + min + ":" + sec;
    }

    setTimeout("currentTime()", 1000);
}