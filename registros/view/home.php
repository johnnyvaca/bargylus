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

        <label>
            <input type="date" name="date2" id="dd">
        </label><br>
        <input type="time"><br>
    <?php  foreach ($users as $user){ ?>
        <input type="text" placeholder="quantidad adultos" id="test">
<?php } ?>





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
    let p = document.createElement("input");
    p.value = 'coucou'
    const userprofile = document.querySelector('#form');
userprofile.appendChild(p)
form.chil
    test.value = "new value2"

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