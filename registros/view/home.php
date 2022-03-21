<?php
/**
 *Created by bargylus.
 *FILE_NAME:home.php
 *USER:marwan
 *DATE:14.05.2020
 */

ob_start();
?>
<div style="position: relative;bottom:0px;top:0px justify-content: center;align-items: center; background-color: rgba(255,255,255,0.86)">
    <form method="post" action="index.php?action=signup" id="form">

        <div  class="container">
            <div class="row">
                <div class="col-6">
                    <input type="date" class="form-control" name="date" id="calendar" value="<?= $cultos["date"] ?>">
                </div>
                <div class="col-6" style="background-color: #00549b;right: 20px">
                    <input id="addService" type="button" value="ajouter un service">
                </div>
            </div>
        </div>


        <br><br>
        <input type="text" name="adultos" id="dd" value="<?= $cultos["adultos"] ?>">
        <input type="text" name="ninos" id="ninos" value="<?= $cultos["ninos"] ?>"><br>
        <input type="hidden" name="culto_id" id="ninos" value="<?= $cultos["id"] ?>">

        <?php
        foreach ($datas as $data) { ?>

            <input type="text" name="name[]" id="dd" title="coucou" value="<?= $data["name"] ?>" list="listName">
            <input type="text" name="firstname[]" id="dd" title="coucou"
                   value="<?= $data["firstname"] ?> <?= $data["lastname"] ?>" list="listUserFirst">

            <input type="hidden" name="services_id[]" id="dd" value="<?= $data["services_id"] ?>">
            <input type="hidden" name="users_id[]" id="dd" value="<?= $data["users_id"] ?>">
            <br>
        <?php } ?>

    </form>
    <br>
    <button id="confirmer" style="background-color: #00549b; height: 25px; width: 300px; color: white;text-align: center">Confirmer</button>
</div>

    <datalist id="listName">
        <?php
        foreach ($services

        as $service){ ?>
        <option value="<?= $service['name'] ?>">
            <?php } ?>
    </datalist>
    <datalist id="listUserFirst">
        <?php
        foreach ($users

        as $user){ ?>
        <option value="<?= $user['firstname'] ?> <?= $user['lastname'] ?>">
            <?php } ?>
    </datalist>
    <datalist id="listUserLast">
        <?php
        foreach ($users

        as $user){ ?>
        <option value="<?= $user['lastname'] ?>">
            <?php } ?>
    </datalist>


    <script>
        function fnEditProfilFirstname() {
            form.submit()
        }

        function fnAddInputs() {
            let p = document.createElement("input");
            let p2 = document.createElement("input");
            let p4 = document.createElement("br");
            p.name = "name[]"
            p.setAttribute("list", 'listName')
            p2.name = "firstname[]"
            p2.setAttribute("list", 'listUserFirst')


            const userprofile = document.querySelector('#form');
            userprofile.appendChild(p2)
            userprofile.appendChild(p)
            userprofile.appendChild(p4)
        }

        function init() {
            calendar.addEventListener("input", fnEditProfilFirstname)
            confirmer.addEventListener("click", fnEditProfilFirstname)
            addService.addEventListener("click", fnAddInputs)
        }

        //lit tout l'html avant de lancer la fonction init
        document.addEventListener("DOMContentLoaded", init)
    </script>
<?php
$content2 = ob_get_clean();
require "view/gabarit.php";
?>