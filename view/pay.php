<?php
ob_start();
$title = "pay_Page";
?>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
