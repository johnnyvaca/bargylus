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

    <div class="site-section mt-5" style="height: 100%">
        <div class="" style="background: transparent; height: 100%">

            <div class="col-12 section-title text-center " style="margin-bottom: 0; background: transparent">
                <h2 class="d-block">Bienvenues à la EEANJESUS </h2>

                <p>il y a un seul Seigneur, une seule foi, un seul baptême... Éphésiens 4:5</p>
            </div>


            <hr style="height:3px;border-width:0;color:gray;background-color:red;">

            <div style="position: absolute;display: flex; align-content: space-between; background: green; height: 603px">

                <div class="scrol" style="margin-left: 30px; margin-top: 50px; height: 400px">

                    <div class="card text-white bg-primary mb-3" style=" width: 600px">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3" style="width: 600px">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                    <div class="card text-white bg-primary mb-3" style=" width: 600px">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3" style="width: 600px">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div> <div class="card text-white bg-primary mb-3" style=" width: 600px">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3" style="width: 600px">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div> <div class="card text-white bg-primary mb-3" style=" width: 600px">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3" style="width: 600px">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div> <div class="card text-white bg-primary mb-3" style=" width: 600px">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3" style="width: 600px">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div style=" position: absolute;right: 30px ; background: #6d0058; height: 400px;width: 800px;margin-top: 50px;display: flow; justify-content: space-between "
             class="site-section">
            <div style="width: 700px; height: 50px;background: #ff0000; align-items: center; align-content: center">
                <p style="color: whitesmoke; text-align: center">CONVENCION INTERNACIONAL 11,12,13 DE
                    OCTUBRE</p></div>

                <iframe  style="padding-top: 50px; width: 700px;height: 350px; background: #0d364b; position: absolute; display:  flex ; justify-content: space-around" width="600" height="300"
                        src="https://www.youtube.com/embed/6UFV6rFV_TM"
                        title="Videito" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
          <!--      <div style=" ">     </div> -->

        </div>
    </div>


    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>