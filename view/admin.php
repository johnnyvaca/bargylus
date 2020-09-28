<?php
ob_start();
$title = "Bargylus - Admin";


?>
<br><br><br><p>sdf</p>
<table>
   <thead>
    <tr>
    <th>nom vin</th><th>quantité</th><th>prix 1 vin</th><th>num commande</th><th>état</th><th>prix total</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($orders as $i => $order) {
if ($i == 0){
    echo "<tr><td>".$order['id']."</td><td>".$order['firstname']."</td><td  colspan='5'>".$order['lastname']."</td></tr>";

        }else if( $orders[$i]['id'] != $orders[$i-1]['id'] && $i != 0){
    echo "<tr><td>".$order['id']."</td><td>".$order['firstname']."</td><td  colspan='5'>".$order['lastname']."</td></tr>";
        }

        if ($i == 0){
        echo "<tr> <td></td><td colspan='6'>".$order['number']."</td></tr>";

                                                            }else if( $orders[$i]['number'] != $orders[$i-1]['number'] && $i != 0){
                                                            echo "<tr> <td></td><td colspan='6'>".$order['number']."</td></tr>";
                                                                                                                }
        ?>
        <tr>
           <td></td>
            <td>nom du vin : <?=$order['winename']?></td>
            <td>quantité : <?=$order['quantity']?></td>
            <td>prix 1 : <?=$order['price_wine']?></td>
            <td>état : <?=$order['state']?></td>
            <td>total : <?=$order['total_price']?></td>
        </tr>
    <?php
    } ?>

    </tbody>
</table>
<?php

$content = ob_get_clean();
require "gabarit.php";
?>