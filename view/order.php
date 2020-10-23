<?php

/**
 * *File :basket.php
 *User :Marwan.ALHELO
 *Project :bargylus
 *Date:10.09.2020
 */

ob_start();
$title = "commande";
?>


<div class="site-section  pb-0">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-7 section-title text-center mb-5">
                <h2 class="d-block">Commande <?= $order[0]['number'] ?></h2>
            </div>
        </div>
        <div class="col-lg-3 mb-3 col-md-3">

            <div class="wine_v_1 text-center pb-4">

                <div>

                    <h3 class="text-black"><b>Adresse livraison</b></h3>
                                <span class="price">  <h3><?= $order[0]['firstname_delivery'] ?> <?= $order[0]['lastname_delivery'] ?>
                                </h3><?= $order[0]['street_delivery'] ?><br> <?= $order[0]['zip_delivery'] ?> <?= $order[0]['city_delivery'] ?><br></span>
                </div>

            </div>
        </div>
        <div class="row mb-5">

            <div class="site-blocks-table">
                <table class="table table-bordered">
                    <thead> <?php //todo ?>
                    <tr>  <!--traduction en français   -->
                        <th class="product-thumbnail">Image</th>
                        <th class="product-name">Produit</th>
                        <th class="product-price">Prix</th>
                        <th class="product-quantity">Quantité</th>
                        <th class="product-total">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($order

                    as $value){ ?>

                    <tr class="col-12 text-center">

                        <td class="product-thumbnail">
                            <a href="index.php?action=winedetail&id=<?= $value['wine_id'] ?>"
                               class="thumbnail d-block mb-4">
                                <img src="images/<?= $value['photo'] ?>" alt="Image" class="img-fluid"></a>
                        </td>

                            <td class="product-name">
                                <a href="index.php?action=winedetail&id=<?= $value['wine_id'] ?>"
                                   class="thumbnail d-block mb-4">
                                <h2 class="h5 cart-product-title text-black"><?= $value['winename'] ?></h2>
                        </a>
                        </td>
                        <td><span
                               class="thumbnail d-block mb-4"><?= $value['price_wine'] ?> CHF</td>
                        </a>
                        <td>
                            <span
                               class="thumbnail d-block mb-4"><?= $value['quantity'] ?>X</span>
                        </td>
                        <!-- applique le calcul ici Altin -->
                        <td><span
                               class="thumbnail d-block mb-4"><?= $value['price_wine'] * $value['quantity'] ?> CHF</span>
                        </td>
                        <?php } ?>

                    </tr>


                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<div class="site-section pt-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pl-5">
                <div class="row justify-content-end">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5">
                                <h3 class="text-black h4 text-uppercase">Total de la commande</h3>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <span class="text-black">Total</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black"><?= $order[0]['total_price'] ?> CHF</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
