<?php
ob_start();
$title = "Bargylus - Admin";


?>
<br><br><p>
    asdas
</p>
<table>
    <thead>
    <tr>
        <th>id</th><th>prénom</th><th>nom</th><th>nom vin</th><th>quantité</th><th>prix 1 vin</th><th>num commande</th><th>état</th><th>prix total</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($orders as $i => $order) {
?>


        <tr>
            <?php if ($i == 0){ ?>
                <td><?=$i?></td>
            <?php}else{?>
        <td>vide</td>
        <?php}?>

            <td><?=$order['winename']?></td>
            <td><?=$order['quantity']?></td>
            <td><?=$order['price_wine']?></td>
            <td><?=$order['number']?></td>
            <td><?=$order['state']?></td>
            <td><?=$order['total_price']?></td>
        </tr>
    <?php
    } ?>

    </tbody>
</table>
<?php

$content = ob_get_clean();
require "gabarit.php";
?>