function maldives() {
    document.getElementById("showActivities").style.display="flex";
    document.getElementById("destination").innerHTML="<input type='text' name='destination' value='Maldives, South Asia'>";
    document.getElementById("checkboxes").innerHTML="<input type='checkbox' name='activity[]' value='Museums'>Museums<br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox' name='activity[]' value='Sailing'>Sailing<br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox' name='activity[]' value='Beach'>Beach<br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox' name='activity[]' value='Hiking'>Hiking<br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox' name='activity[]' value='Boating'>Boating<br>"
}

function cancun() {
    document.getElementById("showActivities").style.display="flex";
    document.getElementById("destination").innerHTML="<input type='text' name='destination' value='Cancun, Mexico'>";
    document.getElementById("checkboxes").innerHTML="<input type='checkbox' name='activity[]' value='Parks & Recreation'>Parks & Recreation<br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox' name='activity[]' value='Beaches'>Beaches<br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox' name='activity[]' value='Boating'>Boating<br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox' name='activity[]' value='Snorkeling'>Snorkeling<br>"
}

function newZealand() {
    document.getElementById("showActivities").style.display="flex";
    document.getElementById("destination").innerHTML="<input type='text' name='destination' value='New Zealand'>";
    document.getElementById("checkboxes").innerHTML="<input type='checkbox' name='activity[]' value='City Tours'>City Tours<br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox' name='activity[]' value='Sports'>Sports<br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox' name='activity[]' value='Cycling'>Cycling<br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox' name='activity[]' value='Museums'>Museums<br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox' name='activity[]' value='Boating'>Boating<br>"
}

function venice() {
    document.getElementById("showActivities").style.display="flex";
    document.getElementById("destination").innerHTML="<input type='text' name='destination' value='Venice, Italy'>";
    document.getElementById("checkboxes").innerHTML="<input type='checkbox' name='activity[]' value='Museums'>Museums<br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox' name='activity[]' value='Theatre'>Theatre<br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox' name='activity[]' value='Parks & Recreation'>Parks & Recreation<br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox' name='activity[]' value='City Tours'>City Tours<br>"
}

function checkedActivities() {
    const checkboxes=document.querySelectorAll("input[type='checkbox']");
    let checkboxLength=checkboxes.length;
    for (let i = 0; i < checkboxLength; i++) {
        if (checkboxes[i].checked) return true;
    }
    return false;
}
 