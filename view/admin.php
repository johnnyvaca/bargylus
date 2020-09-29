<?php
ob_start();
$title = "Bargylus - Admin";


?>
    <br><br><br><p>sdf</p>
<form action="../index.php" method="get">
<input type="hidden" name="action" value="updateState">
    <table class="table table-striped">
        <tbody>
        <?php foreach ($orders as $i => $order) { ?>
            <input type="hidden" name="id_order" value="<?=$order['id_order']?>">
            <?php
            if ($orders[$i]['id'] != $orders[$i - 1]['id']) {
                ?>
                <tr class="table-danger"><td><?=$order['id']?></td><td><?=$order['firstname']?></td><td><?=$order['lastname']?></td><td><select name="<?=$order['id_order']?>"><?=$options[0]?><?=$options[2]?><?=$options[1]?></select></td><td><button></button></td></tr>
           <?php }

            if ($orders[$i]['number'] != $orders[$i - 1]['number']) {
                echo "<tr class=\"table-primary\"> <td></td><td>commande : " . $order['number'] . " </td><td>total : " . $order['total_price'] . "</td><td colspan='2'>état : " . $order['state'] . "</td></tr>";
            }
            ?>
            <tr>
                <td></td>
                <td></td>
                <td>nom du vin : <?= $order['winename'] ?></td>
                <td>quantité : <?= $order['quantity'] ?></td>
                <td>prix 1 : <?= $order['price_wine'] ?></td>

            </tr>
            <?php
        } ?>

        </tbody>
    </table>
</form>
<?php

$content = ob_get_clean();
require "gabarit.php";
?>