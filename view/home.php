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
    <div class="intro-section container bg-success container" >
<div class="row">

</div>
</div> -->


    <!-- here we have to apply the sold -->


    <div class="containerbg-success">
        <div class="row pb-5 pt-5 justify-content-center">
            <h1 class="text-danger font-weight-bold" style="font-family: Roboto,sans-serif">
                BIENVENIDOS</h1>
        </div>
    </div>

    <hr class=" pt-0 pb-0 mb-0 pb-0"
        style="height:2px;border-width:0;color:#ff0000;background-color:#ff0000; margin-top: 0;">


    <div class="site-section w-100 mt-0 pt-3 align-items-start align-self-start"
         style="background: linear-gradient(#f8e5e5,white)">
        <div class="container col-12  pl-2">
            <div class="row justify-content-between ">
                <div class="site-section col-md-11 col-sm-11 col-lg-4 align-content-center align-items-center bg-info mt-0 pt-0 pb-0 mb-0 col-5">
                    <!-- style="width: 40%; height: 300px"-->
                    <div class="h-20 bg-danger  pt-0 mt-0  pb-0 mb-0"
                    <p class="pt-0 mt-0 pb-0 mb-0 text-center">Calendario Nacional</p>
                </div>

                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" tabindex="0"
                     class="scrol  mt-0 pt-0 mb-0 pb-0 bg-danger">

                    <div class="card text-white bg-primary mb-3 w-100">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3 w-100">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                    <div class="card text-white bg-primary mb-3 w-100">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3 w-100">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                    <div class="card text-white bg-primary mb-3 w-100">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3 w-100">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                    <div class="card text-white bg-primary mb-3 w-100">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3 w-100">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                    <div class="card text-white bg-primary mb-3 w-100">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3 w-100">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-section col-sm-11 col-11  col-md-11 col-lg-4  bg-info mt-0 pt-0 pb-0 mb-0 col-5">
                <!-- style="width: 40%; height: 300px" -->
                <div class="w-100 h-10 bg-danger align-middle pt-0 mt-0  pb-0 mb-0"
                > <!-- style="width: 100%; height: 10%" -->
                    <p class="pt-0 mt-0 pb-0 mb-0" style="color: whitesmoke">CONVENCION INTERNACIONAL 11,12,13 DE
                        OCTUBRE</p>
                </div>

                <!--  <iframe class="bg-primary pt-0 pb-0 mb-0 mt-0 w-100"
                          height="270px"
                          src="https://www.youtube.com/embed/6UFV6rFV_TM"
                          title="Videito" frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen></iframe> -->
                <video preload="auto" class="bg-primary pt-0 pb-0 mb-0 mt-0 w-100"
                       height="270px" src="/images/video.mp4" controls crossorigin="anonymous" muted loop playsinline
                       title="Videito"></video>

            </div>
        </div>
    </div>
    </div>
    <!--
  -->
<?php
$content = ob_get_clean();
require "gabarit.php";
?>