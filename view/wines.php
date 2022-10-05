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


    <div class="container">
        <div class="row align-bottom  mb-5 mt-5 justify-content-around">

            <div class="col-lg-3 mt-5 col-md-6 ">

                <div class="wine_v_1 text-center h-85  mx-auto">
                    <div class="  h-80 ">
                        <a href="index.php?action=winedetail&id=<?= $wine['id'] ?>"
                           class="thumbnail d-block mb-4 position-relative   "><img
                                    src="../images/p9.png" alt="cliquer ici" class=""
                                    style="max-width: 100%; "></a>

                        <div class="position-absolute w-100 " style="margin-top: -50px">
                            <h3 class=" heading pb-1 pt-1 w-80 mx-auto h-50" style="background-color: #61c0e6">
                                <a href="#"><?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?>
                                    <br>
                                    <?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?></a>
                            </h3>
                        </div>
                        <div class="bg-danger   w-82 mx-auto pl-4 " style="margin-top: -13px; height: 20px">

                        </div>

                    </div>

                </div>


            </div>
            <div class="col-lg-3 mt-5 col-md-6 justify-content-center px-0"
                 style="background: #e0e0e0; margin-top: 500px;">

                <div class="bg-danger position-relative "
                     style="height: 20px;margin-left: -10px; margin-right: -10px; z-index: -1; margin-top: -8px"></div>
                <div class="position-absolute h-100 w-100" style="z-index: 0">
                    <h4 class="text-center">Historia</h4>
                    <p class="text-justify m-4" style="color: #000001">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi, delectus
                        dignissimos eaque enim error et explicabo fugit hic illum magni necessitatibus neque
                        possimus, quas quasi rem repellendus sed vel!
                    </p>
                </div>


            </div>
        </div>


     <!--   <div class="container ml-0 pl-0">


            <div class="row mb-5  ml-0 pl-0">
                <div class="col-12 section-title text-center mb-5  ml-0 pl-0">
                    <h2 class="col-12  ml-0 pl-0" style="background-color: rgb(224,224,224)"><b>Comités
                            nacionales</b><br>(2022-2023)
                    </h2>
                    <h1> Misiones </h1>
                </div>
            </div>
            <?php if ($_SESSION["user"]["droits"] == 1) { ?>
                <div class="btn btn-primary btn-sm "><a href="index.php?action=addwinePage"
                                                        class="nav-link text-center white"> Ajouter un vin </a></div>
            <?php } ?>
            <div class="row justify-content-around ">

                <?php foreach ($wines as $i => $wine) { ?>

                    <div class="col-lg-4 mb-5 col-md-6  ">

                        <div class="wine_v_1 text-center h-100   mx-auto">
                            <div class="  h-80 " style="bottom: 0">
                                <a href="index.php?action=winedetail&id=<?= $wine['id'] ?>"
                                   class="thumbnail d-block mb-4 position-relative   "><img
                                            src="images/<?= $wine['photo'] ?>" alt="cliquer ici" class=""
                                            style="max-width: 100%; "></a>

                                <div class="position-absolute w-100 " style="margin-top: -50px">
                                    <h3 class=" heading pb-1 pt-1 w-80 mx-auto h-50" style="background-color: #61c0e6">
                                        <a href="#"><?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?>
                                            <br>
                                            <?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?></a>
                                    </h3>
                                </div>
                                <div class="bg-danger   w-82 mx-auto pl-4 " style="margin-top: -13px; height: 20px">

                                </div>
                            </div>
                            <div class="wine-actions">
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
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div> -->


     <!--   <div class="owl-carousel hero-slide owl-style ">

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
        </div> -->
<!--
        <div class="site-section py-5 bg-light custom-border-bottom" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 order-md-2">
                        <div class="block-16">
                            <figure>
                                <img src="images/grape.png" alt="Image placeholder" class="img-fluid ">
                                <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"
                                   data-fancybox><span
                                            class="icon-play"></span></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-5 mr-auto">

                        <div class="site-section-heading pt-3 mb-4">
                            <h2 class="text-black font-heading-serif">Vins pour tous</h2>
                        </div>
                        <p>Du vin délicat et fin pour amateurs de vins en tous genre</p>


                    </div>
                </div>
            </div>
        </div> -->
<!--
        <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-truck text-primary"></span>
                        </div>
                        <div class="text">
                            <h2 class="font-heading-serif">Livraison gratuite</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-refresh2 text-primary"></span>
                        </div>
                        <div class="text">
                            <h2 class="font-heading-serif">Satisfait ou remboursé</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-help text-primary"></span>
                        </div>
                        <div class="text">
                            <h2 class="font-heading-serif">Support client</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <div class="site-section bg-light">
            <div class="container">
                <div class="owl-carousel owl-slide-3 owl-slide">

                    <blockquote>
                        <!--   <img src="images/person_1.jpg" alt="Image">
                           <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo quasi
                               quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti quae
                               placeat in cumque?&rdquo;</p>
                           <p class="small text-primary">&mdash; Collin Miller</p> -->


                        <div class="wine_v_1 text-center h-100   mx-auto">
                            <div class="  h-80 " style="bottom: 0">
                                <a href="index.php?action=winedetail&id=<?= $wine['id'] ?>"
                                   class="thumbnail d-block mb-4 position-relative   "><img
                                            src="images/<?= $wine['photo'] ?>" alt="cliquer ici" class=""
                                            style="max-width: 100%; "></a>

                                <div class="position-absolute w-100 " style="margin-top: -50px">
                                    <h3 class=" heading pb-1 pt-1 w-80 mx-auto h-50" style="background-color: #61c0e6">
                                        <a href="#"><?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?>
                                            <br>
                                            <?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?></a>
                                    </h3>
                                </div>
                                <div class="bg-danger   w-82 mx-auto pl-4 " style="margin-top: -13px; height: 20px">

                                </div>
                            </div>
                            <div class="wine-actions">
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
                            </div>
                        </div>

                    </blockquote>
                    <blockquote class="">
                        <!--   <img src="images/person_1.jpg" alt="Image">
                           <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo quasi
                               quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti quae
                               placeat in cumque?&rdquo;</p>
                           <p class="small text-primary">&mdash; Collin Miller</p> -->


                        <div class="wine_v_1 text-center h-100   mx-auto">
                            <div class="  h-80 " style="bottom: 0">
                                <a href="index.php?action=winedetail&id=<?= $wine['id'] ?>"
                                   class="thumbnail d-block mb-4 position-relative   "><img
                                            src="images/<?= $wine['photo'] ?>" alt="cliquer ici" class=""
                                            style="max-width: 100%; "></a>

                                <div class="position-absolute w-100 " style="margin-top: -50px">
                                    <h3 class=" heading pb-1 pt-1 w-80 mx-auto h-50" style="background-color: #61c0e6">
                                        <a href="#"><?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?>
                                            <br>
                                            <?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?></a>
                                    </h3>
                                </div>
                                <div class="bg-danger   w-82 mx-auto pl-4 " style="margin-top: -13px; height: 20px">

                                </div>
                            </div>
                            <div class="wine-actions">
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
                            </div>
                        </div>

                    </blockquote>
                    <blockquote class="">
                        <!--   <img src="images/person_1.jpg" alt="Image">
                           <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo quasi
                               quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti quae
                               placeat in cumque?&rdquo;</p>
                           <p class="small text-primary">&mdash; Collin Miller</p> -->


                        <div class="wine_v_1 text-center h-100   mx-auto">
                            <div class="  h-80 " style="bottom: 0">
                                <a href="index.php?action=winedetail&id=<?= $wine['id'] ?>"
                                   class="thumbnail d-block mb-4 position-relative   "><img
                                            src="images/<?= $wine['photo'] ?>" alt="cliquer ici" class=""
                                            style="max-width: 100%; "></a>

                                <div class="position-absolute w-100 " style="margin-top: -50px">
                                    <h3 class=" heading pb-1 pt-1 w-80 mx-auto h-50" style="background-color: #61c0e6">
                                        <a href="#"><?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?>
                                            <br>
                                            <?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?></a>
                                    </h3>
                                </div>
                                <div class="bg-danger   w-82 mx-auto pl-4 " style="margin-top: -13px; height: 20px">

                                </div>
                            </div>
                            <div class="wine-actions">
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
                            </div>
                        </div>

                    </blockquote>
                    <!--      <blockquote class="testimony">
                              <img src="images/person_1.jpg" alt="Image">
                              <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo
                                  quasi
                                  quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti
                                  quae
                                  placeat in cumque?&rdquo;</p>
                              <p class="small text-primary">&mdash; Allie Smith</p>
                          </blockquote> -->

                </div>
            </div>
        </div>


    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>