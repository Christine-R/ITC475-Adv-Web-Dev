let pugsleySelected = false;
let blueSelected = false;
let snowballSelected = false;
let josieSelected = false;

let pugsleyRacer = document.createElement("img"); 
let blueRacer = document.createElement("img");
let snowballRacer = document.createElement("img");
let josieRacer = document.createElement("img");

pugsleyRacer.src = "images/pugsley.png";
blueRacer.src = "images/blue.png";
snowballRacer.src = "images/snowball.png";
josieRacer.src = "images/josie.png";

let pugsleyWins = document.createElement("img"); 
let blueWins = document.createElement("img");
let snowballWins = document.createElement("img");
let josieWins = document.createElement("img");

pugsleyWins.src = "images/pugsley.png";
blueWins.src = "images/blue.png";
snowballWins.src = "images/snowball.png";
josieWins.src = "images/josie.png";

let countDogsSelected = 0;
let racers = [];
let firstRacer = null;
let secondRacer = null;
let racingLight = document.getElementById("stopLightRacing");
let cardContent = document.getElementById("cardContent");
let previousMs = 0;

// Variables to database
let raceTime;
let dog1;
let dog2;
let raceWinner;

function addSelectedDog(racer) {

    switch(racer) {

        case "pugsley":
            if(countDogsSelected == 2) {
                if(pugsleySelected == true) {
                    document.getElementById("selectPugsley").style.backgroundColor = "lightgray";
                    pugsleySelected = false;
                    countDogsSelected--;
                }
            } else {
                if(pugsleySelected == false) {
                    document.getElementById("selectPugsley").style.backgroundColor = "#65E940";
                    pugsleySelected = true;
                    countDogsSelected++;
                }
                else {
                    document.getElementById("selectPugsley").style.backgroundColor = "lightgray";
                    pugsleySelected = false;
                    countDogsSelected--;
                }
            }
            break;

        case "blue":
            if(countDogsSelected == 2) {
                if(blueSelected == true) {
                    document.getElementById("selectBlue").style.backgroundColor = "lightgray";
                    blueSelected = false;
                    countDogsSelected--;
                }
            } else {
                if(blueSelected == false) {
                    document.getElementById("selectBlue").style.backgroundColor = "#65E940";
                    blueSelected = true;
                    countDogsSelected++;
                }
                else {
                    document.getElementById("selectBlue").style.backgroundColor = "lightgray";
                    blueSelected = false;
                    countDogsSelected--;
                }
            }
            break;

        case "snowball":
            if(countDogsSelected == 2) {
                if(snowballSelected == true) {
                    document.getElementById("selectSnowball").style.backgroundColor = "lightgray";
                    snowballSelected = false;
                    countDogsSelected--;
                }
            } else {
                if(snowballSelected == false) {
                    document.getElementById("selectSnowball").style.backgroundColor = "#65E940";
                    snowballSelected = true;
                    countDogsSelected++;
                }
                else {
                    document.getElementById("selectSnowball").style.backgroundColor = "lightgray";
                    snowballSelected = false;
                    countDogsSelected--;
                }
            }
            break;

        case "josie":
            if(countDogsSelected == 2) {
                if(josieSelected == true) {
                    document.getElementById("selectJosie").style.backgroundColor = "lightgray";
                    josieSelected = false;
                    countDogsSelected--;
                }
            } else {
                if(josieSelected == false) {
                    document.getElementById("selectJosie").style.backgroundColor = "#65E940";
                    josieSelected = true;
                    countDogsSelected++;
                }
                else {
                    document.getElementById("selectJosie").style.backgroundColor = "lightgray";
                    josieSelected = false;
                    countDogsSelected--;
                }
            }
            break;
    }

    if (countDogsSelected == 2) {
        document.querySelector("#raceButton").disabled = false;
    }
    else {
        document.querySelector("#raceButton").disabled = true;
    }

    if (countDogsSelected > 2) {
        alert("You must select 2 dogs to race")
    }
}

function raceSetUp() {
    document.getElementById("dogSelection").style.display = "none";
    setRacers();
    onYourMarks();
}

function setRacers() {
    if(pugsleySelected) {
        racers.push(pugsleyRacer);
    }
    if(blueSelected) {
        racers.push(blueRacer)
    }
    if(snowballSelected) {
        racers.push(snowballRacer)
    }
    if(josieSelected) {
        racers.push(josieRacer)
    }

    loadSelectedRacers();
}

function loadSelectedRacers() {
    firstRacer = racers[0];
    secondRacer = racers[1];

    /* for database */
    recordRacerNames(firstRacer, secondRacer);

    firstRacer.className = "racer1";
    secondRacer.className = "racer2";

    document.getElementById("racer1").appendChild(firstRacer);
    document.getElementById("racer2").appendChild(secondRacer);

    firstRacer.style.left = 0;
    secondRacer.style.left = 0;
}

function onYourMarks() {
    for(let countdown = 1; countdown >= 0; countdown--) {
        if (countdown == 0) {
            setTimeout(letsGo, 500);
        } 
    }
}

function letsGo() {
    let goElement = document.createElement("div");
    goElement.className = "getReady";
    document.getElementById("readySetGo").appendChild(goElement);
    setTimeout(resetCountdown, 500, goElement);
    setLightToGreen();
    requestAnimationFrame(moveRacers);
}

function setLightToGreen() {
    document.getElementById("redOff").style.boxShadow = "0px 0px 0px 0px red";
    document.getElementById("greenOn").style.boxShadow = "0px 0px 20px 10px #65E940";
}

function resetCountdown(countDownElement) {
    countDownElement.remove();
}

function moveRacers(ms) {

    let dog1RandNo = Math.floor(Math.random() * 11);
    let dog2RandNo = Math.floor(Math.random() * 11);
    let crossFinishLine = document.getElementById("crossFinish");

    if (previousMs !== 0) {
      var delta = ms - previousMs;
      firstRacer.style.left = firstRacer.style.left || 0;
      firstRacer.style.left = parseFloat(firstRacer.style.left) + (dog1RandNo * delta / 400) + '%';

      secondRacer.style.left = secondRacer.style.left || 0;
      secondRacer.style.left = parseFloat(secondRacer.style.left) + (dog2RandNo * delta / 400) + '%';
    }
    previousMs = ms;

    if(elementsOverlap(crossFinishLine, firstRacer)) {
        raceWinner = "Racer One";
        cancelAnimationFrame(moveRacers);
        displayWinner(raceWinner);
    } 
    else if(elementsOverlap(crossFinishLine, secondRacer)) {
        raceWinner = "Racer Two";
        cancelAnimationFrame(moveRacers);
        displayWinner(raceWinner);
    }
    else {
        requestAnimationFrame(moveRacers);
        isTouchingStopLight(elementsOverlap(firstRacer, racingLight));
    }
}

function elementsOverlap(el1, el2) {
    const domRect1 = el1.getBoundingClientRect();
    const domRect2 = el2.getBoundingClientRect();

    return !(
        domRect1.top > domRect2.bottom ||
        domRect1.right < domRect2.left ||
        domRect1.bottom < domRect2.top ||
        domRect1.left > domRect2.right
    );
}

function isTouchingStopLight(isTouching) {
    if (isTouching) {
        racingLight.style.opacity = "30%";
    }
    else {
        racingLight.style.opacity = "100%";
    }
}

function displayWinner(raceWinner) {

    let winnerText = "";
    let winnerLabel = document.createElement("div");
    let winnerImage;

    if(raceWinner == "Racer One") {
        switch(firstRacer) {
            case pugsleyRacer:
                winnerText = "Pugsley Wins!";
                textColor("green", winnerLabel);
                winnerImage = pugsleyWins;
                raceWinner = "Pugsley";
                break;
            case blueRacer:
                winnerText = "Blue Wins!";
                textColor("green", winnerLabel);
                winnerImage = blueWins;
                raceWinner = "Blue";
                break;     
            case snowballRacer:
                winnerText = "Snowball Wins!";
                textColor("green", winnerLabel);
                winnerImage = snowballWins;
                raceWinner = "Snowball";
                break; 
            case josieRacer:
                winnerText = "Josie Wins!";
                textColor("green", winnerLabel);
                winnerImage = josieWins;
                raceWinner = "Josie";
                break;
        }
    }
    else if (raceWinner = "Racer Two") {
        switch(secondRacer) {
            case pugsleyRacer:
                winnerText = "Pugsley Wins!";
                textColor("green", winnerLabel);
                winnerImage = pugsleyWins;
                raceWinner = "Pugsley";
                break;
            case blueRacer:
                winnerText = "Blue Wins!";
                textColor("green", winnerLabel);
                winnerImage = blueWins;
                raceWinner = "Blue";
                break;     
            case snowballRacer:
                winnerText = "Snowball Wins!";
                textColor("green", winnerLabel);
                winnerImage = snowballWins;
                raceWinner = "Snowball";
                break; 
            case josieRacer:
                winnerText = "Josie Wins!";
                textColor("green", winnerLabel);
                winnerImage = josieWins;
                raceWinner = "Josie";
                break;
        }
    }
    
    winnerLabel.innerHTML = winnerText;
    document.getElementById("winnerLabel").appendChild(winnerLabel);
    document.getElementById("winnerImg").appendChild(winnerImage);
    cardContent.style.display = "flex";
    winnerImage.style.maxWidth = "100%";
    winnerImage.style.height = "auto";

    sendToServer();
}

function textColor(color, winnerLabel) {
    winnerLabel.style.color = color;
}

function sendToServer() {
    /*
    let form = document.createElement("form");
    form.method = "POST";
    form.action = ""; 

    let winnerElement = document.createElement("input"); 
    winnerElement.value = raceWinner;
    winnerElement.name = "raceWinner";

    form.appendChild(winnerElement);
    document.body.appendChild(form);
    form.submit();
    */

    let XHR = new XMLHttpRequest()

    // get the current timestamp
    raceTime = new Date().toISOString().slice(0, 19).replace('T', ' ');
    
    let params = "raceTime="+raceTime+"&dog1="+dog1+
        "&dog2="+dog2+"&raceWinner="+raceWinner;
    
    XHR.open("POST", "http://127.0.0.1/0 My Greatest Race/db-insert-results.php", true)
    XHR.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    XHR.send(params)
    XHR.onload = function() {
        console.log(this.responseText);
    }
}

function recordRacerNames(racerOne, racerTwo) {
    switch(racerOne) {
        case pugsleyRacer:
            dog1 = "Pugsley";
            break;
        case blueRacer:
            dog1 = "Blue";
            break;
        case snowballRacer:
            dog1 = "Snowball";
            break;
        case josieRacer:
            dog1 = "Josie";
            break;
    }
    switch(racerTwo) {
        case pugsleyRacer:
            dog2 = "Pugsley";
            break;
        case blueRacer:
            dog2 = "Blue";
            break;
        case snowballRacer:
            dog2 = "Snowball";
            break;
        case josieRacer:
            dog2 = "Josie";
            break;
    }

    console.log(dog1);
    console.log(dog2);
}
