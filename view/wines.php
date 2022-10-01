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
            <div class="row bg-info" style="height: 300px">
                <div class="w-50 h-50 d-inline-block p-3" style="background-color: #eee;">Width 25%</div>
                <!--     <div class="w-50   h-25 d-inline-block p-3" style="background-color: #eee;">Width 50%</div> -->
                <!--     <div class="w-75   h-25 d-inline-block p-3" style="background-color: #eee;">Width 75%</div> -->
                <!--     <div class="w-100  h-25 d-inline-block  p-3" style="background-color: #eee;">Width 100%</div> -->
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
                <?php foreach ($wines

                as $i => $wine) { ?>
                <div class="col-lg-4 mb-5 col-md-6">

                    <div class="wine_v_1 text-center justify-content-center bg-light">

                        <a href="index.php?action=winedetail&id=<?= $wine['id'] ?>"
                           class="thumbnail d-block" style="z-index: 2"><img
                                    src="images/<?= $wine['photo'] ?>" alt="cliquer ici" class="img-fluid"></a>
                        si le vin est épuisé
                        <?php if ($wine['stock'] > 0) { ?>
                            <a href="index.php?action=winesBasket&id=<?= $wine['id'] ?>" class="btn add"><span
                                        class="icon-shopping-bag mr-3"></span> ajouter au panier </a>
                        <?php } else { ?>
                            <span>vin épuisé</span>
                        <?php } ?>

                    </div>
                    <div class=" pt-5 ml-5 mr-5 bg-success justify-content-center " style="margin-top: -100px">
                        <h3 class="heading ">
                            <a href="#"><?= $wine['winename'], " ", $wine['color'], " ", $wine['year'] ?></a>
                        </h3>
                    </div>

                </div>
                <?php if ($_SESSION["user"]["droits"] == 1) { ?>
                    <nav class="site-navigation position-relative text-left" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">
                            <li class="btn btn-primary btn-sm"><a
                                        href="index.php?action=editywine&id=<?= $wine['id'] ?>"
                                        class="nav-link text-center white">Modifier</a></li>

                            <li class="btn btn-primary btn-sm"><a
                                        href="index.php?action=deletewine&id=<?= $wine['id'] ?>"
                                        class="nav-link text-center white">Supprimer</a></li>
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