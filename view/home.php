<?php
/**
 *Created by bargylus.
 *FILE_NAME:home.php
 *USER:marwan
 *DATE:14.05.2020
 */

ob_start();
$title = "Bargylus- Home";
?>
    <!--
    <div class="owl-carousel hero-slide owl-style " >

            <div class="intro-section container" style="background-image: url('images/hero_1.png');">
                <div class="row justify-content-center text-center align-items-center">
                    <div class="col-s-8">
                        <span class="sub-title">Vin Royal</span>
                        <h1>Vin de raisin BIO %100</h1>
                    </div>
                </div>
            </div>

            <div class="intro-section container" style="background-image: url('images/hero_2.png');" id="img2">
                <div class="row justify-content-center text-center align-items-center">
                    <div class="col-md-8">
                        <span class="sub-title">Bienvenue</span>
                        <h1>Le vin pour tout le monde </h1>
                    </div>
                </div>
            </div>
        <div class="intro-section container" style="background-image: url('images/img_3.png');" id="img3">
            <div class="row justify-content-center text-center align-items-center">
                <div class="col-md-8">
                    <span class="sub-title">Welcome</span>
                    <h1>Le vin est le lait des vieillards. Vinum lac senutn</h1>
                </div>
            </div>
        </div>
        <div class="intro-section container" style="background-image: url('images/img_1.png');" id="img4">
            <div class="row justify-content-center text-center align-items-center">
                <div class="col-md-8">
                    <span class="sub-title">Bienvenu</span>
                    <h1>VIN DU Bargylus, C'EsT OR </h1>
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- here we have to apply the sold -->

    <div class="site-section mt-5" style="">
        <div class="container">

            <div class="col-12 section-title text-center " style="margin-bottom: 0; background: whitesmoke">
                <h2 class="d-block">Bienvenues à la EEANJESUS </h2>

                <p>il y a un seul Seigneur, une seule foi, un seul baptême... Éphésiens 4:5</p>


            </div>


            <hr style="height:2px;border-width:0;color:gray;background-color:red">

            <!--       <div class="row">

                <?php

            foreach ($solds as $i => $sold) {

                if ($sold['discounts_id'] != 1) { ?>
                <div class="col-lg-4 mb-5 col-md-6">

                    <div class="wine_v_1 text-center pb-4">
                        <a href="index.php?action=winedetail&id=<?= $sold['id'] ?>" class="thumbnail d-block mb-4"><img src="images/<?= $sold['photo'] ?>" alt="Image" class="img-fluid"></a>
                        <div>
                            <h3 class="heading mb-1"><a href="#"><?= $sold['winename'] ?></a></h3>
                            <span class="price"><?= $soldprice[$i] ?> CHF</span>
                        </div>
                        <div class="wine-actions">

                            <h3 class="heading-2"><a href="#"><?= $sold['winename'] ?></a></h3>
                            <span class="price d-block">

                                    <del> <?= $sold['basic_price'] ?> CHF </del><br>
                                    <?= $soldprice[$i] ?>CHF</span>
                            <div class="rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star-o"></span>
                            </div>
                             si le vin est épuisé
                            <?php if ($sold['stock'] > 0) { ?>
                                <a href="index.php?action=winesBasket&id=<?= $sold['id'] ?>" class="btn add"><span class="icon-shopping-bag mr-3"></span> ajouter au panier </a>
                            <?php } else { ?>
                                <span>vin épuisé</span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php }
            } ?>
        </div> -->
            <!--    <div id="div"> -->
            <div style="background:  linear-gradient(#e8c9cf, white); position: relative" class="site-section">
                <!--   <div style="width: 50%; top: 0; left: 0; background: #4c003e; position: static " >
                        <div id='calendar'/>
                        <table>
                            <tr>
                                <th>lu</th>
                                <th>ma</th>
                                <th>me</th>
                                <th>je</th>
                                <th>ve</th>
                                <th>sa</th>
                                <th>di</th>
                            </tr>
                            <?php $iii = 0;
                for ($i = 0; $i < 6; $i++) { ?>
                                <tr>
                                    <?php
                    for ($ii = 0; $ii < 7; $ii++) {
                        $iii++;
                        ?>
                                        <td style="width: 100px;height: 90px; background: #0d95e8; border: #6a9a33; border-style: dashed"><?= $iii ?></td>
                                        <?php
                    }
                    ?>
                                </tr>
                            <?php } ?>
                        </table>
                    </div> -->
                <div style=" width=555;top: 0; right: 0; background: red; position: absolute">
                    <iframe width="555" height="315" src="https://www.youtube.com/embed/6UFV6rFV_TM"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>