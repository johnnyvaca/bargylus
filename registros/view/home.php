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
    <input type="date" name="date" id="dd" value="<?=$cultos[0]["date"]?>"><br>
    <input type="text" name="adultos" id="dd" value="<?=$cultos[0]["adultos"]?>">
    <input type="text" name="ninos" id="ninos" value="<?=$cultos[0]["ninos"]?>"><br>
    <input type="hidden" name="culto_id" id="ninos" value="<?=$cultos[0]["id"]?>">
<?php
foreach ($datas as $data){ ?>
    <input type="text" name="name[]" id="dd" value="<?=$data["name"]?>">
    <input type="text" name="firstname[]" id="dd" value="<?=$data["firstname"]?>">
    <input type="text" name="lastname[]" id="dd" value="<?=$data["lastname"]?>">

    <input type="hidden" name="services_id[]" id="dd" value="<?=$data["services_id"]?>">
    <input type="hidden" name="users_id[]" id="dd" value="<?=$data["users_id"]?>">
    <br>
<?php   } ?>
        <input type="submit" value="hello">
    </form>




<datalist>
<?php
foreach ($users as $user){ ?>
         <option value="<?=$user['firstname']?>">
            <?php } ?>
    </datalist>
    <datalist id="id2">
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
        function init() {
            dd.addEventListener("input", fnEditProfilFirstname)
        }

        //lit tout l'html avant de lancer la fonction init
        document.addEventListener("DOMContentLoaded", init)
    </script>
<?php
$content2 = ob_get_clean();
require "view/gabarit.php";
?>