<?php
ob_start();
$title = "Bargylus - Admin";


?>

<?php

foreach ($orders as $order){
    ?>

    <?php
}
?>


<?php

var_dump($orders);
$content = ob_get_clean();
require "gabarit.php";
?>