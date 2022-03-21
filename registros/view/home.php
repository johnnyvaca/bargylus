<?php
/**
 *Created by bargylus.
 *FILE_NAME:home.php
 *USER:marwan
 *DATE:14.05.2020
 */

ob_start();
?>

    <form method="post" action="index.php?action=signup" id="form">

        <div style="background-color: #eee;" class="container">
            <div class="row">
                <div class="col-6" style="background-color: #516b36;">
                    <input type="date" class="form-control" name="date" id="dd" value="<?= $cultos["date"] ?>">
                </div>
                <div class="col-6" style="background-color: #ad4848;">
                    <button title="hello" id="addService">ajouter un service</button>
                </div>
            </div>
        </div>


        <br><br>
        <input type="text" name="adultos" id="dd" value="<?= $cultos["adultos"] ?>">
        <input type="text" name="ninos" id="ninos" value="<?= $cultos["ninos"] ?>"><br>
        <input type="hidden" name="culto_id" id="ninos" value="<?= $cultos["id"] ?>">

        <?php
        foreach ($datas as $data) { ?>
            <input type="text" name="firstname[]" id="dd" title="coucou"
                   value="<?= $data["firstname"] ?> <?= $data["lastname"] ?>" list="listUserFirst">
            <input type="text" name="name[]" id="dd" title="coucou" value="<?= $data["name"] ?>" list="listName">

            <input type="hidden" name="services_id[]" id="dd" value="<?= $data["services_id"] ?>">
            <input type="hidden" name="users_id[]" id="dd" value="<?= $data["users_id"] ?>">
            <br>
        <?php } ?>

    </form>
    <br>
    <button id="confirmer" style="background-color: darkgreen; height: 20px; width: 300px">Confirmer</button>


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
            dd.addEventListener("input", fnEditProfilFirstname)
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