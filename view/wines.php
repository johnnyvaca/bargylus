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
            <div class="row bg-info mb-5 h-50 w-50">
                <div class=" col-3 bg-danger thumbnail w-100 h-100">

                </div>
            </div>
        </div>

        <div class="container">


            <div class="row mb-5">
                <div class="col-12 section-title text-center mb-5">
                    <h2 class="col-12" style="background-color: rgb(224,224,224)"><b>Comités nacionales</b><br>(2022-2023)
                    </h2>
                    <h1> Misiones </h1>
                </div>
            </div>
            <?php if ($_SESSION["user"]["droits"] == 1) { ?>
                <div class="btn btn-primary btn-sm "><a href="index.php?action=addwinePage"
                                                        class="nav-link text-center white"> Ajouter un vin </a></div>
            <?php } ?>
            <div class="row">
                <?php foreach ($wines as $i => $wine) { ?>
                    <div class="col-lg-4 mb-5 col-md-6">

                        <div class="wine_v_1 text-center pb-4">

                            <a href="index.php?action=winedetail&id=<?= $wine['id'] ?>"
                               class="thumbnail d-block mb-4"><img
                                        src="images/<?= $wine['photo'] ?>" alt="cliquer ici" class="img-fluid"></a>
                            <div>
                                <h3 class="heading mb-1"><a
                                            href="#"><?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?></a>
                                </h3>
                            </div>
                            <div class="wine-actions">
                                <h3 class="heading-2"><a
                                            href="#"><?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?></a>
                                </h3>
                                <?php if ($wine['discounts_id'] != 1) { ?>
                                    <span class="price d-block"><del> <?= $wine['basic_price'] ?> CHF </del></span>
                                <?php } ?>
                                <span class="price d-block"> <?= $wine['sold_price'] ?>CHF</span>

                                <div class="rating">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star-o"></span>
                                </div>
                                <!-- si le vin est épuisé -->
                                <?php if ($wine['stock'] > 0) { ?>
                                    <a href="index.php?action=winesBasket&id=<?= $wine['id'] ?>" class="btn add"><span
                                                class="icon-shopping-bag mr-3"></span> ajouter au panier </a>
                                <?php } else { ?>
                                    <span>vin épuisé</span>
                                <?php } ?>

                            </div>

                        </div>
                        <?php if ($_SESSION["user"]["droits"] == 1) { ?>
                            <nav class="site-navigation position-relative text-left" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">
                                    <li class="btn btn-primary btn-sm"><a
                                                href="index.php?action=editywine&id=<?= $wine['id'] ?>"
                                                class="nav-link text-center white">Modifier </a></li>

                                    <li class="btn btn-primary btn-sm"><a
                                                href="index.php?action=deletewine&id=<?= $wine['id'] ?>"
                                                class="nav-link text-center white">Supprimer </a></li>

                                </ul>
                            </nav>
                        <?php } ?>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>