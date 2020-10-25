
function fnEditProfil(){
    labelFirstname.hidden = true;
    textFirstname.hidden = false;
    editFirstname.hidden = true;
    confirmationFirstname.hidden = false;
}


function init() {
    editFirstname.addEventListener("click", fnEditProfil)
}

//lit tout l'html avant de lancer la fonction init
document, addEventListener("DOMContentLoaded", init)