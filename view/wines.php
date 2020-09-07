<?php
/**
 *Created by bargylus.
 *FILE_NAME:wines.php
 *USER:marwan
 *DATE:14.05.2020
 */

ob_start();
$title = "Bargylus- wines";
?>

<div class="site-section mt-5">
    <div class="container">

        <div class="row mb-5">
            <div class="col-12 section-title text-center mb-5">
                <h2 class="d-block"> Barhylus élabore des vins de grande qualité, régulièrement distingués dans les principaux concours.</h2>
                <p> notre vins </p>
            </div>
        </div>

        <div class="row">
            <?php  foreach ($wines as $wine) { ?>
            <div class="col-lg-4 mb-5 col-md-6">

                <div class="wine_v_1 text-center pb-4">

                    <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="images/<?=$wine['photo'] ?>" alt="Image" class="img-fluid"></a>
                    <div>
                        <h3 class="heading mb-1"><a href="#"><?= $wine['name'] ?></a></h3>
                        <span class="price"><?= $wine['basic_price'] ?> CHF</span>
                    </div>


                    <div class="wine-actions">

                        <h3 class="heading-2"><a href="#"><?= $wine['name']," ",$wine['year'] ?></a></h3>
                        <span class="price d-block"><?= $wine['basic_price'] ?> CHF</span>

                        <div class="rating">
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star-o"></span>
                        </div>

                        <a href="cart.html" class="btn add"><span class="icon-shopping-bag mr-3"></span> Add to Cart</a>
                    </div>

                </div>

            </div>
            <?php  } ?>



        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";