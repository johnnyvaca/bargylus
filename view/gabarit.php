<?php
/**
 *Created by Bargylus.
 *FILE_NAME:gabarit.php
 *USER:marwan
 *DATE:14.05.2020
 */
?>
<!DOCTYPE html>
<?php require_once 'view/helpers.php' ?>
<html lang="fr">

<head>
    <title><?= $title; ?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">

    <script src="js/gabarit.js"></script>
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="/css/aos.css">
    <link href="/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/main.css">

<style>
    .scrollit {
        overflow: scroll;
        height: 10%;
    }
</style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <a href="index.php?action=home" class="site-logo">
                        <img src="/images/logo.png" alt="Image" class="img-fluid " id="logo">
                    </a>
                </div>
                <a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                            class="icon-menu h3"></span></a>
            </div>
        </div>

        <!-- J'ajoute un flashmessage pour la connexion) -->
        <?= getFlashMessage() ?>
        <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

            <div class="container">
                <div class="d-flex align-items-center">

                    <div class="mx-auto">
                        <nav class="site-navigation position-relative text-left" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">

                                <li class="active"><a href="index.php?action=home" class="nav-link text-left">Page
                                        d'accueil</a>
                                </li>
                                <li class="active"><a href="index.php?action=displaywines" class="nav-link text-left">Vins</a>
                                </li>
                                <li class="active"><a href="index.php?action=about" class="nav-link text-left">À
                                        propos</a>
                                </li>
                                <li class="active"><a href="#" class="nav-link text-left">Shop</a></li>
                                <li class="active "><a href="index.php?action=contact" class="nav-link text-left">Contact</a>
                                </li>
                                <?php if (isset($_SESSION["user"])) { ?>
                                    <li class="btn btn-primary"><?= '<a href="index.php?action=logout"
                                                               class="nav-link text-center white">logout</a>' ?></li>
                                    <li class="btn btn-primary"><a href="index.php?action=profil&id=<?=$_SESSION['user']['id']?>"
                                                               class="nav-link text-center white">Profil</a></li>

                                    <?php if ($_SESSION["user"]["droits"] == 1) { ?>
                                        <li class="btn btn-primary"><?= '<a href="index.php?action=adminPage"
                                                               class="nav-link text-center white">Administration</a>' ?></li>

                                    <?php } ?>
                                <?php } else { ?>

                                    <li class="btn btn-primary"><?= '<a href="index.php?action=login"
                                                               class="nav-link text-center white">Login</a>' ?></li>
                                <?php } ?>


                                <li class="btn btn-primary"><a href="index.php?action=basket"
                                                               class="nav-link text-center white"><span
                                                class="icon-shopping-bag mr-3"></span>panier <?= $_SESSION['totalQuantity'] ?>
                                    </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<?= $content; ?>


<div class="footer">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <div class="social-icons">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-youtube"></span></a>
                    <a href="#"><span class="icon-instagram"></span></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="copyright">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright ©
                        <script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="icon-heart text-danger"
                                                                            aria-hidden="true"></i> by <a href="#"
                                                                                                          target="_blank">Marwanophe</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>


</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#ff5e15"/>
    </svg>
</div>

<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/jquery.countdown.min.js"></script>
<script src="/js/bootstrap-datepicker.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/jquery.fancybox.min.js"></script>
<script src="/js/jquery.sticky.js"></script>
<script src="/js/jquery.mb.YTPlayer.min.js"></script>
<script src="/js/main.js"></script>

<script src="/js/signup.js"></script>
</body>

</html>