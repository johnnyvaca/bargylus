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

<!-- here we have to apply the sold -->

    <div class="site-section mt-5">
        <div class="container">

            <div class="row mb-5">
                <div class="col-12 section-title text-center mb-5">
                    <h2 class="d-block">Notre promotion </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, perspiciatis!</p>
                    <p><a href="#">voir les vins <span class="icon-long-arrow-right"></span></a></p>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 mb-5 col-md-6">

                    <div class="wine_v_1 text-center pb-4">
                        <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="images/wine_2.png" alt="Image" class="img-fluid"></a>
                        <div>
                            <h3 class="heading mb-1"><a href="#">Trius Cabernet France 2011</a></h3>
                            <span class="price">$629.00</span>
                        </div>


                        <div class="wine-actions">

                            <h3 class="heading-2"><a href="#">Trius Cabernet France 2011</a></h3>
                            <span class="price d-block">$629.00</span>

                            <div class="rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star-o"></span>
                            </div>

                            <a href="#" class="btn add"><span class="icon-shopping-bag mr-3"></span> Add to Cart</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 mb-5 col-md-6">
                    <div class="wine_v_1 text-center pb-4">
                        <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="images/wine_3.png" alt="Image" class="img-fluid"></a>
                        <div>
                            <h3 class="heading mb-1"><a href="#">Trius Cabernet France 2011</a></h3>
                            <span class="price">$629.00</span>
                        </div>


                        <div class="wine-actions">

                            <h3 class="heading-2"><a href="#">Trius Cabernet France 2011</a></h3>
                            <span class="price d-block"><del>$900.00</del> $629.00</span>

                            <div class="rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star-o"></span>
                            </div>

                            <a href="#" class="btn add"><span class="icon-shopping-bag mr-3"></span> Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5 col-md-6">
                    <div class="wine_v_1 text-center pb-4">
                        <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="images/wine_1.png" alt="Image" class="img-fluid"></a>
                        <div>
                            <h3 class="heading mb-1"><a href="#">Trius Cabernet France 2011</a></h3>
                            <span class="price">$629.00</span>
                        </div>


                        <div class="wine-actions">

                            <h3 class="heading-2"><a href="#">Trius Cabernet France 2011</a></h3>
                            <span class="price d-block"><del>$900.00</del> $629.00</span>

                            <div class="rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star-o"></span>
                            </div>

                            <a href="#" class="btn add"><span class="icon-shopping-bag mr-3"></span> Add to Cart</a>
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