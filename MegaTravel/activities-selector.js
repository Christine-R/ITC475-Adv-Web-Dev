/* START */

function maldives() {
    console.log("test maldives")
    document.getElementById("showActivities").style.display="flex";
    document.getElementById("destination").innerHTML="<b>Maldives, South Asia</b>";
    document.getElementById("checkboxes").innerHTML="<input type='checkbox'> Museums</input><br>" 
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox'> Sailing</input><br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox'> Beach</input><br>" 
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox'> Hiking</input><br>" 
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox'> Boating</input>";
}

function cancun() {
    console.log("test cancun")
    document.getElementById("showActivities").style.display="flex";
    document.getElementById("destination").innerHTML="<b>Cancun, Mexico</b>";
    document.getElementById("checkboxes").innerHTML="<input type='checkbox'> Parks & Recreation</input><br>" 
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox'> Beaches</input><br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox'> Boating</input><br>" 
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox'> Snorkeling</input>" 
}

function newZealand() {
    console.log("test newZealand")
    document.getElementById("showActivities").style.display="flex";
    document.getElementById("destination").innerHTML="<b>New Zealand</b>";
    document.getElementById("checkboxes").innerHTML="<input type='checkbox'> City Tours</input><br>" 
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox'> Sports</input><br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox'> Cycling</input><br>" 
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox'> Museums</input><br>" 
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox'> Boating  </input>";
}

function venice() {
    console.log("test venice")
    document.getElementById("showActivities").style.display="flex";
    document.getElementById("destination").innerHTML="<b>Venice, Italy</b>";
    document.getElementById("checkboxes").innerHTML="<input type='checkbox'> Museums</input><br>" 
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox'> Theatre</input><br>"
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox'> Parks & Recreation</input><br>" 
    document.getElementById("checkboxes").innerHTML+="<input type='checkbox'> City Tours</input>" 
}

function checkedActivities() {
    const checkboxes=document.querySelectorAll("input[type='checkbox']");
    let checkboxLength=checkboxes.length;
    for (let i = 0; i < checkboxLength; i++) {
        if (checkboxes[i].checked) return true;
    }
    return false;
}

/* END */