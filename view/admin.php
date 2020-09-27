<?php
ob_start();
$title = "Bargylus - Admin";


?>

<?php

foreach ($orders as $order){
    var_dump($order);
    ?>
<br>
<br>
    <?php
}
?>


<?php

var_dump($orders);
$content = ob_get_clean();
require "gabarit.php";
?>