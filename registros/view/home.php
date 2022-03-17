<?php
/**
 *Created by bargylus.
 *FILE_NAME:home.php
 *USER:marwan
 *DATE:14.05.2020
 */

ob_start();
?>
    <button title="hello" id="addService">ajouter un service</button>
    <form method="post" action="index.php?action=signup" id="form">
      <input type="submit" value="CONFIRMER" STYLE="background-color: darkgreen"><br>
    <input type="date" name="date" id="dd" value="<?=$cultos[0]["date"]?>"><br><br>

    <input type="text" name="adultos" id="dd" value="<?=$cultos[0]["adultos"]?>">
    <input type="text" name="ninos" id="ninos" value="<?=$cultos[0]["ninos"]?>"><br>
    <input type="hidden" name="culto_id" id="ninos" value="<?=$cultos[0]["id"]?>">
<?php
foreach ($datas as $data){ ?>
    <select  name="name[]" id="dd">

        <?php
        foreach ($services as $service){ ?>
            <option  value="<?=$service['name']?>"><?=$service['name']?></option>
            <?php } ?>
    </select>
    <input type="text" name="firstname[]" id="dd" title="coucou" value="<?=$data["firstname"]?> <?=$data["lastname"]?>" list="listUserFirst">

    <input type="hidden" name="services_id[]" id="dd" value="<?=$data["services_id"]?>">
    <input type="hidden" name="users_id[]" id="dd" value="<?=$data["users_id"]?>">
    <br>
<?php   } ?>

    </form>



    <datalist id="listName">
        <?php
        foreach ($services as $service){ ?>
        <option value="<?=$service['name']?>">
            <?php } ?>
    </datalist>
<datalist id="listUserFirst">
<?php
foreach ($users as $user){ ?>
         <option value="<?=$user['firstname']?> <?=$user['lastname']?>">
             <?php } ?>
    </datalist>
    <datalist id="listUserLast">
        <?php
        foreach ($users as $user){ ?>
        <option value="<?=$user['lastname']?>">
            <?php  } ?>
    </datalist>
    <script>
function fnEditProfilFirstname(){
    /*
    let p = document.createElement("input");
    p.value = 'coucou'
    const userprofile = document.querySelector('#form');
userprofile.appendChild(p)
form.chil
    test.value = "new value2"*/
    form.submit()

}
function fnAddInputs(){
    let p = document.createElement("input");
    let p2 = document.createElement("input");
    let p4 = document.createElement("br");
    p.name="name[]"
    p.setAttribute("list",'listName')
    p2.name="firstname[]"
    p2.setAttribute("list",'listUserFirst')


    const userprofile = document.querySelector('#form');
    userprofile.appendChild(p)
    userprofile.appendChild(p2)
    userprofile.appendChild(p3)
    userprofile.appendChild(p4)
}
        function init() {
            dd.addEventListener("input", fnEditProfilFirstname)
            addService.addEventListener("click",fnAddInputs)
        }

        //lit tout l'html avant de lancer la fonction init
        document.addEventListener("DOMContentLoaded", init)
    </script>
<?php
$content2 = ob_get_clean();
require "view/gabarit.php";
?>