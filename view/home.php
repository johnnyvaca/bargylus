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


    <div class="container ">
        <div class="row pb-5 pt-5 justify-content-center">
            <h1 class="text-danger font-weight-bold" style="font-family: Roboto,sans-serif">
                BIENVENIDOS</h1>
        </div>
    </div>

    <hr class=" pt-0 pb-0 mb-0 pb-0"
        style="height:3px;border-width:0;color:#ff0000;background-color:#ff0000; margin-top: 0;">
    <div class="container">
        <div class="m-4">
            <div class="row">
                <div class="col">
                    <div class="overflow-auto bg-light" style="max-height: 200px;">
                        This is an example of using2 <code>.overflow-auto</code> on an element with set width and height
                        dimensions.This is an example of using2 <code>.overflow-auto</code> on an element with set width
                        and
                        height dimensions.This is an example of using2 <code>.overflow-auto</code> on an element with
                        set
                        width and height dimensions.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section w-100 h-50 mt-0 pt-3 align-items-start align-self-start "
         style="background: linear-gradient(#f8e5e5,white)"> <!-- pl-2 pr-2 pl-xl-0 pr-xl-0 -->
        <div class="container col-12 ">
            <div class="row justify-content-center   justify-content-xl-around  h-20 ">
                <div class="col-11 col-xl-5 align-content-center align-items-center  mt-0 pt-0 pb-0 mb-0 col-5 ">
                    <!-- style="width: 40%; height: 300px"-->
                    <div class="  pt-0 mt-0  pb-0 mb-0">
                        <p class="pt-0 mt-0 pb-0 mb-0 text-center text-black">Calendario Nacional</p>
                    </div>


                    <div
                            class="overflow-visible   m-0 p-0">

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
                <div class="site-section col-11 col-xl-5   mt-5 mt-5 mt-xl-0  pt-0 pb-0 mb-0">
                    <!-- style="width: 40%; height: 300px" -->
                    <div class="w-100 bg-danger align-middle pt-0 mt-0  pb-0 mb-0">
                        <!-- style="width: 100%; height: 10%" -->
                        <span class="pt-0 mt-0 pb-0 mb-0" style="color: whitesmoke">CONVENCION INTERNACIONAL 11,12,13 DE
                            OCTUBRE</span>
                    </div>

                    <!--  <iframe class="bg-primary pt-0 pb-0 mb-0 mt-0 w-100"
                              height="270px"
                              src="https://www.youtube.com/embed/6UFV6rFV_TM"
                              title="Videito" frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen></iframe>




                    <video preload="auto" class=" pt-0 pb-0 mb-0 mt-0 w-100"
                           height="270px" src="/images/video.mp4" controls crossorigin="anonymous" muted loop
                           playsinline
                           title="Videito"></video>-->
                    <div class="embed-responsive embed-responsive-16by9 p-0 m-0">
                        <video class="embed-responsive-item" controls loop src="/images/video.mp4"
                               allowfullscreen></video>
                    </div>
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