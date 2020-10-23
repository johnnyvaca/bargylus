<?php
ob_start();
$title = "profil_Page";
?>


<br>
<br>



<div class="container">
    <div class="section-title mb-5 text-center">
        <h2>Profil de <?= $user['firstname'] ?> <?= $user['lastname'] ?></h2>
    </div>
    <div class="row">
        <div class="col-md-4">
            <span class="text-black"> Prénom: </span>
            <br>
            <span><?= $user['firstname'] ?></span>
        </div>
        <div class="col-md-4">
            <span class="text-black"> Nom: </span>
            <br>
            <span><?= $user['lastname'] ?></span>
        </div>
        <div class="col-md-4">
            <span class="text-black"> Numéro: </span>
            <br>
            <span><?= $user['phone_number'] ?></span>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <span class="text-black"> Date d'inscription: </span>
            <br>
            <span><?= $user['registration_date'] ?></span>
        </div>
        <div class="col-md-4">
            <span class="text-black"> Année de naissance: </span>
            <br>
            <span><?= $user['birth_date'] ?></span>
        </div>
        <div class="col-md-4">
            <span class="text-black"> Rue: </span>
            <br>
            <span><?= $user['street_home'] ?></span>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <span class="text-black"> Zip: </span>
            <br>
            <span><?= $user['zip'] ?></span>
        </div>
        <div class="col-md-4">
            <span class="text-black"> Ville: </span>
            <br>
            <span><?= $user['city'] ?></span>
        </div>
        <div class="col-md-4">
            <span class="text-black"> Canton: </span>
            <br>
            <span><?= $user['canton'] ?></span>
        </div>
    </div> 
    <br>
    <br>
    <div class="w-100 d-flex justify-content-center">
        <button>Editer profil</button>
        <a href="index.php?action=myorders&id=<?=$user['id']?>"
           class="btn btn-primary py-3 px-5">Voir mes commandes</a>
    </div>
    <br>
</div>



<?php
$content = ob_get_clean();
require "gabarit.php";
?>
