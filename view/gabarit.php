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
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link href='fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/daygrid/main.css' rel='stylesheet' />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
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


    <script src="/js/stayle.js"></script>

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
<!--<div class="splash">
    <img src="../images/splash.gif" width="100%">
</div> -->
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
                        <!--   <img src="/images/logo.png" alt="Image" class="img-fluid" id="logo"> -->
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
                                                      class="nav-link text-left text-danger"><img
                                                src="../images/logo.jpg" height="120px" width="160px"></a>
                                </li>
                                <li class="active "><a href="index.php?action=contact"
                                                       class="nav-link text-left text-danger">Eventos</a>
                                </li>
                                <?php if (isset($_SESSION["user"])) { ?>
                                    <li class="btn btn-danger"><?= '<a href="index.php?action=logout"
                                                               class="nav-link text-center white">Déconnexion</a>' ?></li>
                                    <li class="btn btn-danger"><a
                                                href="index.php?action=profil&id=<?= $_SESSION['user']['id'] ?>"
                                                class="nav-link text-center white">Profil</a></li>

                                    <?php if ($_SESSION["user"]["droits"] == 1) { ?>
                                        <li class="btn btn-danger"><?= '<a href="index.php?action=adminPage"
                                                               class="nav-link text-center white">Commandes</a>' ?></li>
                                        <li class="btn btn-danger"><a href="index.php?action=listOfAccounts"
                                                                      class="nav-link text-center white">Comptes</a>
                                        </li>
                                    <?php } ?>
                                <?php } else { ?>

                                    <!--  <li class="btn btn-danger"><?= '<a href="index.php?action=login"
                                                               class="nav-link text-center white">Donaciones</a>' ?></li> -->

                                    <li class="active "><a href="index.php?action=donations"
                                                           class="nav-link text-left text-danger">Donaciones</a>
                                    </li>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            Idioma
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Francais</a></li>
                                            <li><a class="dropdown-item" href="#">Deutsch</a></li>
                                            <li><a class="dropdown-item" href="#">Español</a></li>
                                            <li><a class="dropdown-item" href="#">Italiano</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                                <?php } ?>

                                <!--
                                <li class="btn btn-primary"><a href="index.php?action=basket"
                                                               class="nav-link text-center white"><span
                                                class="icon-shopping-bag mr-3"></span>panier <?= $_SESSION['totalQuantity'] ?>
                                    </a></li>
                                    -->
                            </ul>
                        </nav>
                    </div>
                </div>
                <hr style="height:2px;border-width:0;color:gray;background-color:red">
            </div>


        </div>


    </div>

</div>

<?= $content; ?>


<div class="footer">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center" style="background-color: red; height: 200px; position: relative; vertical-align: center">
                <div style=" position: absolute; left: 0; vertical-align: center" class="social-icons" >
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-youtube"></span></a>
                    <a href="#"><span class="icon-instagram"></span></a>
                </div>
                <div >
                    <p>

                        Copyright ©
                        <script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This page is make by Eean Jesus Lausanne

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
<script src="/js/gabarit.js"></script>




<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src='fullcalendar/packages/core/main.js'></script>
<script src='fullcalendar/packages/interaction/main.js'></script>
<script src='fullcalendar/packages/daygrid/main.js'></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'interaction', 'dayGrid' ],
            defaultDate: '2020-02-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2020-02-01'
                },
                {
                    title: 'Long Event',
                    start: '2020-02-07',
                    end: '2020-02-10'
                },
                {
                    groupId: 999,
                    title: 'Repeating Event',
                    start: '2020-02-09T16:00:00'
                },
                {
                    groupId: 999,
                    title: 'Repeating Event',
                    start: '2020-02-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2020-02-11',
                    end: '2020-02-13'
                },
                {
                    title: 'Meeting',
                    start: '2020-02-12T10:30:00',
                    end: '2020-02-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2020-02-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2020-02-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2020-02-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2020-02-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2020-02-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2020-02-28'
                }
            ]
        });

        calendar.render();
    });

</script>

<script src="js/main.js"></script>
</body>

</html>