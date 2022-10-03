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

    <div class="site-section mt-5  "> <!---->
        <!-- <div class="container">
            <div class="row bg-info" style="height: 300px">
                <div class="col-lg-4 mb-5 col-md-6 bg-success ">

                    <div class="wine_v_1 text-center bg-dark justify-content-center col-12 p-0 ">

                        <a href="index.php?action=winedetail&id=<?= $wine['id'] ?>"
                           class="thumbnail d-block mb-4 position-relative"><img
                                    src="images/<?= $wine['photo'] ?>" alt="cliquer ici" class="img-fluid"></a>

                        <div class="position-absolute   justify-content-center  w-100 " style="margin-top: -50px">
                            <h3 class=" heading pb-1 pt-1 w-80 mx-auto h-50" style="background-color: #61c0e6"><a
                                        href="#"><?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?><br>
                                    <?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?></a>
                            </h3>

                        </div>
                        <div class="bg-danger   w-82 mx-auto pl-4 " style="margin-top: -15px; height: 20px">

                        </div>

                    </div>
                </div>
                <div class="w-50 h-50 d-inline-block p-3" style="background-color: #eee;">Width 25%</div>
                     <div class="w-50   h-25 d-inline-block p-3" style="background-color: #eee;">Width 50%</div>
                     <div class="w-75   h-25 d-inline-block p-3" style="background-color: #eee;">Width 75%</div>
                     <div class="w-100  h-25 d-inline-block  p-3" style="background-color: #eee;">Width 100%</div>
            </div>
        </div> -->

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
            <div class="row align-bottom">
                <?php foreach ($wines as $i => $wine) { ?>
                    <div class="col-lg-4 mb-5 col-md-6 bg-warning align-content-center" >

                        <div class="wine_v_1  text-center bg-dark justify-content-center ">
                            <div class="bg-success  " style="">
                                <a href="index.php?action=winedetail&id=<?= $wine['id'] ?>"
                                   class="thumbnail d-block mb-4 position-relative bg-info  "><img
                                            src="images/<?= $wine['photo'] ?>" alt="cliquer ici" class=""
                                            style="max-width: 100%; "></a>

                                <div class="position-absolute w-100 " style="margin-top: -50px">
                                    <h3 class=" heading pb-1 pt-1 w-80 mx-auto h-50" style="background-color: #61c0e6">
                                        <a href="#"><?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?>
                                            <br>
                                            <?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?></a>
                                    </h3>
                                </div>
                                <div class="bg-danger   w-82 mx-auto pl-4 " style="margin-top: -15px; height: 20px">

                                </div>
                            </div>
                            <!--  <div class="wine-actions">
                                <h3 class="heading-2"><a
                                            href="#"><?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?></a>
                                </h3>
                                <?php if ($wine['discounts_id'] != 1) { ?>
                                    <span class="price d-block"><del> <?= $wine['basic_price'] ?> CHF </del></span>
                                <?php } ?>
                                <span class="price d-block"> <?= $soldWineprice[$i] ?>CHF</span>


                                <div class="rating">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star-o"></span>
                                </div>

                                <?php if ($wine['stock'] > 0) { ?>
                                    <a href="index.php?action=winesBasket&id=<?= $wine['id'] ?>" class="btn add"><span
                                                class="icon-shopping-bag mr-3"></span> ajouter au panier </a>
                                <?php } else { ?>
                                    <span>vin épuisé</span>
                                <?php } ?>
                            </div> -->
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>