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
            <?php foreach($deliveries as $delivery){ ?>
                    <tr>
                        <th><?= $delivery['firstname'] ?></th>
                        <th><?= $delivery['lastname'] ?></th>
                        <th><?= $delivery['street'] ?></th>
                        <th><?= $delivery['zip'] ?></th>
                        <th><?= $delivery['city'] ?></th>
                        <th><?= $delivery['visibility'] ?></th>
                    </tr>
                <?php } ?>
        </table>
    <form method="post" action="index.php?action=archiveDeliveries">
        <input type="number" name="zip" placeholder="zip" required>
        <button type="submit" class="btn btn-primary py-3 px-3">Archiver</button>
    </form>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
