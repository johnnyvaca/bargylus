<?php
ob_start();
$title = "Bargylus - Admin";

?>
    <br>
    <br>
    <br>


    <table class="table table-striped table-hover">
        <tbody>
        <?php foreach ($orders as $i => $order) { ?>

            <?php
            if ($orders[$i]['id'] != $orders[$i - 1]['id']) {
                ?>

                <tr class="table-primary">
                    <td><?= $order['id'] ?></td>
                    <td><?= $order['firstname'] ?></td>
                    <td><?= $order['lastname'] ?></td>
                    <td></td>
                    <td></td>
                    <td><a href="index.php?action=profil&id=<?=$order['id']?>" class="btn btn-primary py-1 px-3">voir</a></td>
                </tr>
            <?php }

            if ($orders[$i]['number'] != $orders[$i - 1]['number']) {
                ?>
                <form action="../index.php?action=updateState" method="post">
                    <input type="hidden" name="user_id" value="<?= $order['id'] ?>">
                    <input type="hidden" name="orderId" value="<?= $order['id_order'] ?>">
                    <tr >
                        <a href="index.php?action=order&id=<?= $order['id_order'] ?>">
                        <td><?= $order['id_order'] ?></td>
                        <td>commande : <?= $order['number'] ?> date : <?= $order['date_purchase'] ?></td>
                        <td>total : <?= $order['total_price'] ?></td>
                        <td>état :<?= $order['state_name'] ?></td>
                        <td>
                            <select name="state"><?= $options[$i][0] ?><?= $options[$i][1] ?><?= $options[$i][2] ?></select>
                        </td>
                        </a>
                        <td>
                            <input type="submit" value="envoyer" class="btn btn-primary py-1 px-3">
                            <a href="index.php?action=order&id=<?= $order['id_order'] ?>" class="btn btn-primary py-1 px-3">voir</a>
                        </td>
                    </tr>
                </form>
                <?php
            }

        } ?>


        </tbody>
    </table>


<?php

$content = ob_get_clean();
require "gabarit.php";
?>