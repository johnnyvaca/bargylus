<?php

ob_start();
$title = "list of deliveries";

?>

<br>
<br>
<br>
<br>
<br>
<br>
<form method="post" action="#">
    <input type="number" name="number" placeholder="numero utilisateur" required>
    <button type="submit" class="btn btn-primary py-3 px-3">Chercher</button>
    <a href="index.php?action=signupPage"
       class="btn btn-primary py-3 px-5">créer un compte</a>
</form>

<div class="row-fluid text-center">

    <h1>Livraisons</h1>
    <table class="table">
        <tr>
            <th>prénom</th>
            <th>nom</th>
            <th>rue</th>
            <th>zip</th>
            <th>ville</th>
        </tr>
        <?php foreach($users as $user){ ?>
            <tr>
                <th><?=$user['number_user']?></th>
                <th><?= $user['firstname'] ?></th>
                <th><?= $user['lastname'] ?></th>
                <th><?= $user['street_home'] ?></th>
                <th><?= $user['zip'] ?></th>
                <th><?= $user['city'] ?></th>
            </tr>
        <?php } ?>
    </table>

</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
