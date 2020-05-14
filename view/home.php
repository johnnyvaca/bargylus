<?php
/**
 *Created by bargylus.
 *FILE_NAME:home.php
 *USER:marwa
 *DATE:14.05.2020
 */

ob_start();
$title = "Bargylus- Accueil";
?>
<div class="owl-carousel hero-slide owl-style">
        <div class="intro-section container" style="background-image: url('../images/hero_1.jpg');">
            <div class="row justify-content-center text-center align-items-center">
                <div class="col-md-8">
                    <span class="sub-title">Royal Wine</span>
                    <h1>Grape Wine</h1>
                </div>
            </div>
        </div>

        <div class="intro-section container" style="background-image: url('../images/hero_2.jpg');">
            <div class="row justify-content-center text-center align-items-center">
                <div class="col-md-8">
                    <span class="sub-title">Welcome</span>
                    <h1>Wines For Everyone</h1>
                </div>
            </div>
        </div>

    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>