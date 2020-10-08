<?php
ob_start();
$title = "Bargylus - Admin";

?>
    <br>
    <br>
    <br>


        <table class="table table-striped">
            <tbody>
            <?php foreach ($orders as $i => $order) { ?>

                <?php
                if ($orders[$i]['id'] != $orders[$i - 1]['id']) {
                    ?>

                    <tr class="table-danger">
                        <td><?= $order['id'] ?></td>
                        <td><?= $order['firstname'] ?></td>
                        <td colspan="4"><?= $order['lastname'] ?></td>
                    </tr>
                <?php }

                if ($orders[$i]['number'] != $orders[$i - 1]['number']) {
                    ?>
            <form action="../index.php?action=updateState" method="post">
                <input type="hidden" name="user_id" value="<?=$order['id']?>">
                <input type="hidden" name="orderId" value="<?=$order['id_order']?>">
                    <tr class="table-primary">
                        <td></td>
                        <td>commande : <?= $order['number'] ?>        date : <?=$order['date_purchase']?></td>
                        <td>total : <?= $order['total_price'] ?></td>
                        <td>état :<?= $order['state_name'] ?></td>
                        <td>
                            <select name="state"><?= $options[$i][0] ?><?= $options[$i][1] ?><?= $options[$i][2] ?></select>
                        </td>
                        <td>
                            <input type="submit" value="modifier"  class="btn btn-primary py-1 px-3">
                        </td>
                    </tr>
            </form>
                    <?php
                }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>nom du vin : <?= $order['winename'] ?></td>
                    <td>quantité : <?= $order['quantity'] ?></td>
                    <td colspan="2">prix 1 : <?= $order['price_wine'] ?></td>

                </tr>
                <?php
            } ?>


            </tbody>
        </table>



<?php

$content = ob_get_clean();
require "gabarit.php";
?>