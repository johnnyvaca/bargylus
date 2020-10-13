<?php
ob_start();
$title = "profil_Page";
?>


<br>
<br>



<div class="container">
    <div class="section-title mb-5 text-center">
        <h2>Profil de <?= $_SESSION['user']['firstname'] ?> <?= $_SESSION['user']['lastname'] ?></h2>
    </div>
    <div class="row">
        <div class="col-md-4">
            <span class="text-black"> Prénom: </span>
            <br>
            <span><?= $_SESSION['user']['firstname'] ?></span>
        </div>
        <div class="col-md-4">
            <span class="text-black"> Nom: </span>
            <br>
            <span><?= $_SESSION['user']['lastname'] ?></span>
        </div>
        <div class="col-md-4">
            <span class="text-black"> Numéro: </span>
            <br>
            <span><?= $_SESSION['user']['phone_number'] ?></span>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <span class="text-black"> Date d'inscription: </span>
            <br>
            <span><?= $_SESSION['user']['registration_date'] ?></span>
        </div>
        <div class="col-md-4">
            <span class="text-black"> Année de naissance: </span>
            <br>
            <span><?= $_SESSION['user']['birth_date'] ?></span>
        </div>
        <div class="col-md-4">
            <span class="text-black"> Rue: </span>
            <br>
            <span><?= $_SESSION['user']['street_home'] ?></span>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <span class="text-black"> Zip: </span>
            <br>
            <span><?= $_SESSION['user']['zip'] ?></span>
        </div>
        <div class="col-md-4">
            <span class="text-black"> Ville: </span>
            <br>
            <span><?= $_SESSION['user']['city'] ?></span>
        </div>
        <div class="col-md-4">
            <span class="text-black"> Canton: </span>
            <br>
            <span><?= $_SESSION['user']['canton'] ?></span>
        </div>
    </div>
    <br>
    <br>
    <div class="w-100 d-flex justify-content-center">
        <button>Editer profil</button>
        <a href="index.php?action=myorders"
           class="btn btn-primary py-3 px-5">Voir mes commandes</a>
    </div>
    <br>
</div>



<?php
$content = ob_get_clean();
require "gabarit.php";
?>
