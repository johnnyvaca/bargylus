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
                <div class="col-6" style="background-color: rgba(255,255,255,0);right: 20px">
                    <input id="addService" type="button" class="btn btn-warning" value="ajouter un service">
                </div>
            </div>
        </div>


        <br><br>
        <input type="text" placeholder="quantité adultes" name="adultos" id="dd" value="<?= $cultos["adultos"] ?>">
        <input type="text" placeholder="quantité enfants" name="ninos" id="ninos" value="<?= $cultos["ninos"] ?>"><br>
        <input type="hidden" name="culto_id" id="ninos" value="<?= $cultos["id"] ?>">

        <?php
        foreach ($datas as $data) { ?>

      <!--      <input type="text" name="name[]" id="dd" title="coucou" value="<?= $data["name"] ?>" list="listName"> -->
        <select class="selectpicker" name="name[]" data-live-search="true">
            <option value=""  data-tokens="nada" >nada</option>
            <?php
            foreach ($services as $service){
                if($service['id'] == $data['services_id'] ){?>
                <option value="<?= $service['name'] ?>" data-tokens="<?= $service['name'] ?>" selected><?= $service['name'] ?></option>
                    <?php }else{?>
                    <option value="<?= $service['name'] ?>" data-tokens="<?= $service['name'] ?>" ><?= $service['name'] ?></option>
                    <?php }?>
                <?php } ?>
        </select>
   <!--         <input type="text" name="firstname[]" id="dd" title="coucou"
                   value="<?= $data["firstname"] ?> <?= $data["lastname"] ?>" list="listUserFirst"> -->

            <select class="selectpicker" name="firstname[]" data-live-search="true">
                <option value=""  data-tokens="nada" >nada</option>
                <?php
                foreach ($users as $user){
                    if($user['id'] == $data['users_id'] ){?>
                        <option value="<?= $user['firstname'] ?> <?= $user['lastname'] ?>" data-tokens="<?= $user['firstname'] ?> <?= $user['lastname'] ?>" selected><?= $user['firstname'] ?> <?= $user['lastname'] ?></option>
                    <?php }else{?>
                        <option value="<?= $user['firstname'] ?> <?= $user['lastname'] ?>" data-tokens="<?= $user['lastname'] ?> <?= $user['lastname'] ?>"><?= $user['firstname'] ?> <?= $user['lastname'] ?></option>
                    <?php }?>
                <?php } ?>
            </select>
       <!--     <a type="button" href="index.php?action=deleteData&id=<?=$data["id"]?>" class="btn btn-danger">X</a> -->
            <input type="hidden" name="services_id[]" id="dd" value="<?= $data["services_id"] ?>">
            <input type="hidden" name="users_id[]" id="dd" value="<?= $data["users_id"] ?>">
            <input type="hidden" name="id[]" id="dd" value="<?= $data["id"] ?>">
            <br>
        <?php } ?>

    </form>
    <br>
    <button id="confirmer" class="btn btn-primary" style="background-color: #00549b; height: 40px; width: 90%;margin-left: 15px; margin-right: 100px; color: white;text-align: center">Confirmer</button>
    <!-- Button trigger modal -->

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
        foreach ($users as $user){ ?>
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
            p.placeholder = "nom du service"
            p.setAttribute("list", 'listName')
            p2.name = "firstname[]"
            p2.style = ";left:100px;"
            p2.placeholder = "nom et prénom"
            p2.setAttribute("list", 'listUserFirst')


            const userprofile = document.querySelector('#form');
            userprofile.appendChild(p)
            userprofile.appendChild(p2)
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