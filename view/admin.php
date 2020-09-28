<?php
ob_start();
$title = "Bargylus - Admin";


?>
<br><br><br><p>sdf</p>
<table class="table table-striped">
    <tbody>
    <?php foreach ($orders as $i => $order) {
if ($i == 0){
    echo "<tr class=\"table-danger\"><td>".$order['id']."</td><td>".$order['firstname']."</td><td colspan='3'>".$order['lastname']."</td></tr>";

        }else if( $orders[$i]['id'] != $orders[$i-1]['id'] && $i != 0){
    echo "<tr class=\"table-danger\"><td>".$order['id']."</td><td>".$order['firstname']."</td><td colspan='3'>".$order['lastname']."</td></tr>";
        }

        if ($i == 0){
            echo "<tr class=\"table-primary\"> <td></td><td>commande : ".$order['number']." </td><td>total : ".$order['total_price']."</td><td colspan='2'>état : ".$order['state']."</td></tr>";

        }else if( $orders[$i]['number'] != $orders[$i-1]['number'] && $i != 0){
            echo "<tr class=\"table-primary\"> <td></td><td>commande : ".$order['number']." </td><td>total : ".$order['total_price']."</td><td colspan='2'>état : ".$order['state']."</td></tr>";                                          }
        ?>
        <tr>
           <td></td>
            <td></td>
            <td>nom du vin : <?=$order['winename']?></td>
            <td>quantité : <?=$order['quantity']?></td>
            <td>prix 1 : <?=$order['price_wine']?></td>

        </tr>
    <?php
    } ?>

    </tbody>
</table>
<?php

$content = ob_get_clean();
require "gabarit.php";
?>