<?php

//J'ajoute un flashmessage pour la connexion)
function getFlashMessage(){
    if(isset($_SESSION['flashmessage'])) {
        $message = $_SESSION['flashmessage'];
        unset($_SESSION['flashmessage']);
        return "<div class='alert alert-info'>$message</div>";
    }
}

