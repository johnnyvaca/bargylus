
function fnEditProfilFirstname(){
    labelFirstname.hidden = true;
    textFirstname.hidden = false;
    editFirstname.hidden = true;
    confirmationFirstname.hidden = false;
}

function fnEditProfilLastname(){
    labelLastname.hidden = true;
    textLastname.hidden = false;
    editLastname.hidden = true;
    confirmationLastname.hidden = false;
}

function fnEditProfilNumber(){
    labelNumber.hidden = true;
    textNumber.hidden = false;
    editNumber.hidden = true;
    confirmationNumber.hidden = false;
}

function fnEditProfilStreet(){
    labelStreet.hidden = true;
    textStreet.hidden = false;
    editStreet.hidden = true;
    confirmationStreet.hidden = false;
}

function fnEditProfilZip(){
    labelZip.hidden = true;
    textZip.hidden = false;
    editZip.hidden = true;
    confirmationZip.hidden = false;
}

function fnEditProfilCity(){
    labelCity.hidden = true;
    textCity.hidden = false;
    editCity.hidden = true;
    confirmationCity.hidden = false;
}

function fnEditProfilBirthdate(){
    labelBirthdate.hidden = true;
    textDay.hidden = false;
    textMonth.hidden = false;
    textYear.hidden = false;
    editBirthdate.hidden = true;
    confirmationBirthdate.hidden = false;
}


function init() {
    editFirstname.addEventListener("click", fnEditProfilFirstname)
    editLastname.addEventListener("click", fnEditProfilLastname)
    editNumber.addEventListener("click", fnEditProfilNumber)
    editStreet.addEventListener("click", fnEditProfilStreet)
    editZip.addEventListener("click", fnEditProfilZip)
    editCity.addEventListener("click", fnEditProfilCity)
    editBirthdate.addEventListener("click", fnEditProfilBirthdate)
}

//lit tout l'html avant de lancer la fonction init
document, addEventListener("DOMContentLoaded", init)