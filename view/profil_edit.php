<?php
ob_start();
$title = "profilEdit_Page";
?>


<br>
<br>
<br>
<br>

<div class="container">
    <div class="section-title mb-5 text-center">
        <h2>Profil de <?= $user['firstname'] ?> <?= $user['lastname'] ?></h2>
    </div>
    <div class="row">
        <div class="col-md-4">
            <form method="post" action="index.php?action=profilElementEdition">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <span class="text-black"> Prénom: </span>
            <br>
            <span id="labelFirstname"><?= $user['firstname'] ?></span>
            <input type="text" id="textFirstname" name="firstname" class="form-control form-control-lg"
                    placeholder="Prénom" required hidden>
            <button class="btn btn-primary py-3 px-3" id="editFirstname">Editer</button>
            <button class="btn btn-primary py-3 px-3" id="confirmationFirstname" hidden>Confirmer</button>
            </form>
        </div>
        <div class="col-md-4">
            <form method="post" action="index.php?action=profilElementEdition">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <span class="text-black"> Nom: </span>
            <br>
            <span id="labelLastname"><?= $user['lastname'] ?></span>
                <input type="text" id="textLastname" name="lastname" class="form-control form-control-lg"
                       placeholder="Nom" required hidden>
                <button class="btn btn-primary py-3 px-3" id="editLastname">Editer</button>
                <button class="btn btn-primary py-3 px-3" id="confirmationLastname" hidden>Confirmer</button>
            </form>
        </div>
        <div class="col-md-4">
            <form method="post" action="index.php?action=profilElementEdition">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <span class="text-black"> Numéro: </span>
            <br>
            <span id="labelNumber"><?= $user['phone_number'] ?></span>
                <input type="number" id="textNumber" name="number" class="form-control form-control-lg"
                       placeholder="Numéro" required hidden>
                <button class="btn btn-primary py-3 px-3" id="editNumber">Editer</button>
                <button class="btn btn-primary py-3 px-3" id="confirmationNumber" hidden>Confirmer</button>
            </form>
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
            <form method="post" action="index.php?action=profilElementEdition">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <span class="text-black"> Année de naissance: </span>
            <br>
            <span id="labelBirthdate"><?= $user['birth_date'] ?></span>
            <input type="number" id="textDay" min="1" max="31" name="day" class="form-control form-control-lg"
                   placeholder="Jour" required hidden>
            <input type="number" id="textMonth" min="1" max="12" name="month" class="form-control form-control-lg"
                   placeholder="Mois" required hidden>
            <input type="number" id="textYear" min="1990" max="2100" name="year" class="form-control form-control-lg"
                   placeholder="Année" required hidden>
            <button class="btn btn-primary py-3 px-3" id="editBirthdate">Editer</button>

            <button class="btn btn-primary py-3 px-3" id="confirmationBirthdate" hidden>Confirmer</button>
            </form>
        </div>
        <div class="col-md-4">
            <form method="post" action="index.php?action=profilElementEdition">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <span class="text-black"> Rue: </span>
            <br>
            <span id="labelStreet"><?= $user['street_home'] ?></span>
                <input type="text" id="textStreet" name="street" class="form-control form-control-lg"
                       placeholder="Rue" required hidden>
                <button class="btn btn-primary py-3 px-3" id="editStreet">Editer</button>
                <button class="btn btn-primary py-3 px-3" id="confirmationStreet" hidden>Confirmer</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <form method="post" action="index.php?action=profilElementEdition">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <span class="text-black"> Zip: </span>
            <br>
            <span id="labelZip"><?= $user['zip'] ?></span>
                <input type="number" id="textZip" name="zip" class="form-control form-control-lg"
                       placeholder="Zip" required hidden>
                <button class="btn btn-primary py-3 px-3" id="editZip">Editer</button>
                <button class="btn btn-primary py-3 px-3" id="confirmationZip" hidden>Confirmer</button>
            </form>
        </div>
        <div class="col-md-4">
            <form method="post" action="index.php?action=profilElementEdition">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <span class="text-black"> Ville: </span>
            <br>
            <span id="labelCity"><?= $user['city'] ?></span>
                <input type="text" id="textCity" name="city" class="form-control form-control-lg"
                       placeholder="Ville" required hidden>
                <button class="btn btn-primary py-3 px-3" id="editCity">Editer</button>
                <button class="btn btn-primary py-3 px-3" id="confirmationCity" hidden>Confirmer</button>
            </form>
        </div>
        <div class="col-md-4">
            <span class="text-black"> Canton: </span>
            <br>
            <span><?= $user['canton'] ?></span>
            <button class="btn btn-primary py-3 px-3">Editer</button>
        </div>
    </div>
    <br>
    <br>
    <div class="w-100 d-flex justify-content-center">
        <a href="index.php?action=profil&id=<?=$user['id']?>">Quitter l'édition</a>
        <a href="index.php?action=myorders&id=<?=$user['id']?>"
           class="btn btn-primary py-3 px-5">Voir mes commandes</a>
    </div>
    <br>
</div>



<?php
$content = ob_get_clean();
require "gabarit.php";
?>
