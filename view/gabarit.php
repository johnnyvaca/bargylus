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

    <link rel="stylesheet" href="/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="/css/aos.css">
    <link href="/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/main.css">


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200" style="background:  yellow">
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
        <!--   <div class="container">

                  <div class="row align-items-start">  <div class="col-12 text-center">
                        <a href="index.php?action=home" class="site-logo">
                             <img src="/images/logo.png" alt="Image" class="img-fluid " id="logo">
                       </a>

                       </div>
                   </div>


          </div>-->
        <?= getFlashMessage() ?>

        <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
            <div class="container ">
                <div class="d-flex align-items-center">

                    <div class="mx-auto">
                        <a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                    class="icon-menu h3"></span></a>
                        <nav class="site-navigation position-relative text-left" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">
                                <li class="active"><a href="index.php?action=home"
                                                      class="nav-link text-left text-danger">Quienes somos</a>
                                </li>
                                <li class="active"><a href="index.php?action=displaywines"
                                                class="nav-link text-left text-danger">Administracion</a>
                                </li>
                                <li class="active"><a href="index.php?action=about"
                                                        class="nav-link text-left text-danger">Cultos</a>
                                </li>
                                <li class="active"><a href="index.php?action=about"
                                                        class="nav-link text-left text-danger pb-0 mb-0 pt-0 mt-0"><img
                                                src="../images/logo.jpg" height="100px" width="230px"></a>
                                </li>


                                <li class="nav-item"><a href="index.php?action=contact"
                                                        class="nav-link text-left text-danger">Eventos</a>
                                </li>
                                <?php if (isset($_SESSION["user"])) { ?>
                                    <li class="nav-item btn-danger"><?= '<a href="index.php?action=logout"
                                                               class="nav-link text-center white">Déconnexion</a>' ?></li>
                                    <li class="nav-item btn btn-danger"><a
                                                href="index.php?action=profil&id=<?= $_SESSION['user']['id'] ?>"
                                                class="nav-link text-center white">Profil</a></li>

                                    <?php if ($_SESSION["user"]["droits"] == 1) { ?>
                                        <li class="nav-item btn btn-danger"><?= '<a href="index.php?action=adminPage"
                                                               class="nav-link text-center white">Commandes</a>' ?></li>
                                        <li class="nav-item btn btn-danger"><a href="index.php?action=listOfAccounts"
                                                                               class="nav-link text-center white">Comptes</a>
                                        </li>
                                    <?php } ?>
                                <?php } else { ?>

                                    <!--  <li class="btn btn-danger"><?= '<a href="index.php?action=login"
                                                               class="nav-link text-center white">Donaciones</a>' ?></li> -->

                                    <li class="nav-item border border-danger pb-0 mb-0 py-0 h-100"><a
                                                href="index.php?action=donations"
                                                class="nav-link text-left text-danger ">Donaciones</a>
                                    </li>
                                    <li class="nav-item dropdown border border-danger h-100">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                           data-toggle="dropdown">
                                            Idioma
                                        </a>
                                        <div class="dropdown-menu mb-0 pb-0" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Francais</a>
                                            <a class="dropdown-item" href="#">Deutsch</a>
                                            <a class="dropdown-item" href="#">Español</a>
                                            <a class="dropdown-item" href="#">Italiano</a>
                                        </div>
                                    </li>


                                <?php } ?>


                            </ul>
                        </nav>

                    </div>
                </div>

            </div>
        </div>
    </div><hr class=" pt-0 pb-0 mb-0 pb-0"
              style="height:2px;border-width:0;color:#ff0000;background-color:#ff0000; margin-top: 0;">
</div>

<!--
<div class="splash">
    <img src="../images/splash.gif" width="100%">
</div>
-->

<!-- J'ajoute un flashmessage pour la connexion) -->





<?= $content; ?>

<div class="footer">
    <div class="container">
        <div class="row bg-danger">
            <div class="col-3 social-icons  ">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-youtube"></span></a>
                <a href="#"><span class="icon-instagram"></span></a>
            </div>

            <div class="col-3 text text-light">
                <ul style="list-style-type: none;margin: 0;padding: 0;position: absolute" class="">
                    <li><span style="font-weight: bold">Français</span>
                        <span>- Jean Poul     </span><span>     079 232 40 06</span>
                    </li>
                    <li><span style="font-weight: bold">Deutsch</span>
                        <span>- Carlos Schmidt</span><span>     079 232 40 06</span></li>
                    <li><span style="font-weight: bold">Español</span>
                        <span>- Armando Valdez</span><span>     079 232 40 06</span></li>
                    <li><span style="font-weight: bold">Italiano</span>
                        <span>- Fabio Ricardi </span><span>     079 232 40 06</span>
                    </li>
                </ul>
            </div>
            <!--  <div style="background: green; height: 50px;width: 50px; align-items: center;justify-content: center"></div>-->
        </div>
    </div>
</div>
<!-- <div style="background: #c527b8">
     <p>

         Copyright ©
         <script>document.write(new Date().getFullYear());</script>
         All rights reserved | This page is make by Eean Jesus Lausanne

     </p>

 </div> -->


<!-- Footer -->


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
<script src="/js/gabarit.js"></script>


<script src="/js/signup.js"></script>
</body>

</html>