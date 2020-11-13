<?php
/**
 *Created by bargylus.
 *FILE_NAME:soldwindetails.php
 *USER:marwa
 *DATE:22.09.2020
 */

ob_start();
$title = "Wine_soldwindetails";

?>
    <div class="site-section bg-primary py-5 page-title-wrap mt-5">
        <div class="container">
            <h1><?= $wine ['winename'], " ", $wine['year'], " ", $wine['color']; ?> </h1>
        </div>
    </div>
    <div class="site-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="owl-carousel hero-slide owl-style">
                        <img src="images/<?= $wine['photo'] ?>" alt="<?= $wine['winename'], " ", $wine['year'] ?>"
                             class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="text-primary mb-4"><?= $wine['winename'], " ", $wine['year'], " ", $wine['color'] ?> </h2>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="product-thumbnail">Année</th>
                            <th class="product-total">Cépage</th>
                            <th class="product-total">Taux d'alcool</th>
                            <th class="product-price"> Prix</th>
                            <th class="product-quantity">Disponibilté</th>
                            <th class="product-total">Taille</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="product-thumbnail">
                                <?= $wine['year'] ?>
                            </td>
                            <td class="product-name">
                                <?= $wine['name'] ?>
                            </td>
                            <td class="">
                                <?= $wine['alcohol'], "%" ?>
                            </td>
                            <td><?= $wine['basic_price'], "CHF" ?></td>
                            <td>
                                <?= $wine['stock'] ?>
                            </td>
                            <td><?= $wine['size'], "L" ?></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="mb-5">
                        <div class="input-group mb-3" style="max-width: 200px;">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                            </div>
                            <input type="text" class="form-control text-center border mr-0" value="1" placeholder=""
                                   aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                            </div>
                        </div>
                    </div>
                    <!-- si le vin est épuisé -->
                    <?php if ($wine['stock'] > 0) { ?>

                        <p><a href="index.php?action=winesBasket&id=<?= $wine['id'] ?>"
                              class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Aujouter au panier</a></p>

                    <?php } else { ?>
                        <span>vin épuisé</span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>