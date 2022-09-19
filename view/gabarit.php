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

    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link href='fullcalendar/packages/core/main.css' rel='stylesheet'/>
    <link href='fullcalendar/packages/daygrid/main.css' rel='stylesheet'/>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css">
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

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200" style="background:  transparent)">
<div class="container">
    <div class="row justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">

            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="index.php?action=home"
                                                   class="nav-link text-left text-danger">Quienes somos</a>
                    </li>
                    <li class="nav-item"><a href="index.php?action=displaywines"
                                            class="nav-link text-left text-danger">Administracion</a>
                    </li>
                    <li class="nav-item"><a href="index.php?action=about"
                                            class="nav-link text-left text-danger">Cultos</a>
                    </li>
                    <li class="nav-item"><a href="index.php?action=about"
                                            class="nav-link text-left text-danger"><img
                                    src="../images/logo.jpg" height="120px" width="160px"></a>
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

                    <li class="nav-item"><a href="index.php?action=donations"
                                            class="nav-link text-left text-danger">Donaciones</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown">
                            Idioma
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Francais</a>
                            <a class="dropdown-item" href="#">Deutsch</a>
                            <a class="dropdown-item" href="#">Español</a>
                            <a class="dropdown-item" href="#">Italiano</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</div>
<!--<div class="splash">
    <img src="../images/splash.gif" width="100%">
</div> -->


<!-- J'ajoute un flashmessage pour la connexion) -->


<nav class="site-navigation position-relative text-left" role="navigation">
    <ul class="navbar-nav mr-auto site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">


        <?php } ?>

        <!--
                                <li class="btn btn-primary"><a href="index.php?action=basket"
                                                               class="nav-link text-center white"><span
                                                class="icon-shopping-bag mr-3"></span>panier <?= $_SESSION['totalQuantity'] ?>
                                    </a></li>
                                    -->

    </ul>
</nav>
<?= getFlashMessage() ?>
<hr style="height:2px;border-width:0;color:gray;background-color:red">


<?= $content; ?>


<div class="pied"
     style="position: absolute; background: red; margin: 0;padding-top: 0;padding-bottom: 0; width: 100%; bottom: 0">

    <div class=""
         style="background-color: transparent; height: 130px;display: flex;justify-content: space-between;">
        <div style="background: transparent; width: 400px;padding-top: 40px;padding-right: 0;padding-left: 0"
             class="social-icons align-items-center">
            <a href="#"><span class="icon-facebook"></span></a>
            <a href="#"><span class="icon-twitter"></span></a>
            <a href="#"><span class="icon-youtube"></span></a>
            <a href="#"><span class="icon-instagram"></span></a>
        </div>

        <div style=" color: whitesmoke;background:transparent; width: 400px;height: 300px right: 0;top: 0">
            <ul style="list-style-type: none;margin: 0;padding: 0;position: absolute" class="numbers2">
                <li><span style="font-weight: bold">Français</span> <span>- Jean Poul     </span><span>     079 232 40 06</span>
                </li>
                <li><span style="font-weight: bold">Deutsch</span>
                    <span>- Carlos Schmidt</span><span>     079 232 40 06</span></li>
                <li><span style="font-weight: bold">Español</span>
                    <span>- Armando Valdez</span><span>     079 232 40 06</span></li>
                <li><span style="font-weight: bold">Italiano</span> <span>- Fabio Ricardi </span><span>     079 232 40 06</span>
                </li>
            </ul>
        </div>
        <!--  <div style="background: green; height: 50px;width: 50px; align-items: center;justify-content: center"></div>-->
    </div>
    <!-- <div style="background: #c527b8">
         <p>

             Copyright ©
             <script>document.write(new Date().getFullYear());</script>
             All rights reserved | This page is make by Eean Jesus Lausanne

         </p>

     </div> -->
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
</body>

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


<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script src='../fullcalendar/packages/core/main.js'></script>
<script src='../fullcalendar/packages/interaction/main.js'></script>
<script src='../fullcalendar/packages/daygrid/main.js'></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['interaction', 'dayGrid'],
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