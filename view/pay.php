<?php
ob_start();
$title = "pay_Page";


if (0) {
    //   var_dump($_SESSION);
    echo '<br>total quantity  ' . $_SESSION["total"];
    echo '<br>total quantity  ' . $_SESSION["totalQuantity"];
    echo '<br>id  ' . $_SESSION['basket'][0]['id'];
    echo '<br>price total one wine  ' . $_SESSION['basket'][0]['priceTotalOneWine'];
}
?>
<div class="site-section  pb-0">
    <div class="container">

        <div class="row mb-5 justify-content-center">

                <h2 class="d-block">Commande de <?= $_SESSION["totalQuantity"] ?> articles  </h2>

        </div>

        <div class="row">

            <h3>1. Livraison</h3>
        </div>
        <p>Site de retrait
        <br>
            <?=$lastOrder['firstname']?> <?=$lastOrder['lastname']?><br>
            <?=$lastOrder['street']?><br>
            <?=$lastOrder['zip']?> <?=$lastOrder['city']?>
        </p>

        <a class="col-12 btn-primary" href="index.php?action=deliveries">modifier</a>
    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
