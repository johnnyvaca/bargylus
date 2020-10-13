<?php
ob_start();
$title = "pay_Page";


if (0) {
    echo '<br>total quantity  ' . $_SESSION["total"];
    echo '<br>total quantity  ' . $_SESSION["totalQuantity"];
    echo '<br>id  ' . $_SESSION['basket'][0]['id'];
    echo '<br>price total one wine  ' . $_SESSION['basket'][0]['priceTotalOneWine'];
}
?>
<div class="site-section  pb-0">
    <div class="container">

        <div class="row mb-5 justify-content-center">

            <h2 class="d-block">Choisir les informations de livraison </h2>

        </div>

        <div class="row">

            <h3>Infos de Livraison</h3>
        </div>
        <form action="index.php?action=payPage" method="post">
        <div class="row">

            <?php foreach ($deliveries as $i => $delivery) {
                ?>

                <div class="col-lg-3 mb-3 col-md-3">

                    <div class="wine_v_1 text-center pb-4">

                        <div>

                                <span class="price">  <h3><?= $delivery['firstname'] ?> <?= $delivery['lastname'] ?>
                                </h3><?= $delivery['street'] ?><br> <?= $delivery['zip'] ?> <?= $delivery['city'] ?><br></span>
                            <a class="col-12 btn-primary" href="index.php?action=modifyDelivery&id=<?= $delivery['delivery_id'] ?>">modifier</a>
                            <input type="radio" name="deliverySelected" value="<?= $delivery['delivery_id'] ?>">
                        </div>

                    </div>
                </div>
                <?php
            } ?>
        </div>
            <button class="btn  btn-primary" >changer la livraison</button>
            <a class="btn  btn-primary" href="index.php?action=addDeliveryPage" >Ajouter une nouvelle adresse</a>
        </form>


    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
