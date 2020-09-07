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

<?php
$content = ob_get_clean();
require "gabarit.php";
?>