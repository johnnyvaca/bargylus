<?php
ob_start();
$title = "pay_Page";
?>
<div class="site-section  pb-0">
    <div class="container">

        <div class="row mb-5 justify-content-center">

            <h2 class="d-block">Commande de <?= $_SESSION["totalQuantity"] ?> articles </h2>
        </div>

        <div class="row">
            <form action="index.php?action=mode_payment" method="post">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <div class="input-group col-lg-9">
                <h3>1. Adresse de livraison</h3>
                <div class="input-group">
                    <span type="text" class="form-control"
                          aria-label="Text input with radio button"><?= $lastOrderDelivery['firstname'] ?> <?= $lastOrderDelivery['lastname'] ?>
                        <?= $lastOrderDelivery['street'] ?> <?= $lastOrderDelivery['zip'] ?> <?= $lastOrderDelivery['city'] ?>
                </span>
                    <div class="input-group-append">
                        <a class="btn btn-primary" href="index.php?action=deliveries&id=<?= $user['id'] ?>"
                           id="button-addon2">modifier</a>
                    </div>
                </div>
            </div>
            <div class="input-group col-lg-9">


                <h3>2. Mode de payement</h3>
                <div class="input-group">

                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" aria-label="Radio button for following text input" name="mode_payment"
                                   value="<?= $lastOrderInvoice['mode_payment_id'] ?>">
                        </div>
                    </div>
                    <span type="text" class="form-control"
                          aria-label="Text input with radio button"><?= $lastOrderInvoice['name'] ?> - <?= $lastOrderInvoice['firstname'] ?> <?= $lastOrderInvoice['lastname'] ?>
                        <?= $lastOrderInvoice['street'] ?> <?= $lastOrderInvoice['zip'] ?> <?= $lastOrderInvoice['city'] ?>
                </span>
                    <div class="input-group-append">
                        <a class="btn btn-primary" href="index.php?action=invoices&id=<?= $user['id'] ?>"
                           id="button-addon2">modifier</a>
                    </div>
                </div>
            </div>

            <div class="input-group col-12">
                <h3>3. liste des vins</h3>
                <?php foreach ($_SESSION['basket'] as $wine) {
                    ?>


                    <div class="col-2">
                        <div class="wine_v_1 text-center pb-3">
                            <a href="index.php?action=winedetail&id=<?= $wine['id'] ?>"
                               class="thumbnail d-block mb-4"><img
                                        src="images/<?= $wine['photo'] ?>" alt="Image"
                                        class="img-fluid"></a>
                            <div>
                                <h3 class="heading mb-1"><a href="#"><?= $wine['winename'] ?></a></h3>
                                <span class="price">1x - <?= $wine['priceWithSold'] ?> CHF</span><br>
                                <span class="price"><?= $wine['quantity'] ?>x - <?= $wine['priceTotalOneWine'] ?> CHF</span>
                            </div>

                        </div>
                    </div>
                    <?php
                } ?>
            </div>
                <input type="submit" class="col-lg-12 btn-primary" value="Continuer">
            </form>
        </div>
    </div>

    <br>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
