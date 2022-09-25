<?php
/**
 *Created by bargylus.
 *FILE_NAME:about.php
 *USER:marwan
 *DATE:14.05.2020
 */
ob_start();
$title = "Bargylus- About";
?>


<div class="site-section py-5 custom-border-bottom" data-aos="fade">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="block-16">
                    <figure>
                        <img src="../images/mountain.jpg" alt="Image placeholder" class="img-fluid">

                    </figure>
                </div>
            </div>

        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <div class="site-section-heading pt-3 mb-4">
                <h2 class="text-black font-heading-serif text text-danger">Quienes somos</h2>
            </div>
            <p>Bargylus vient de l'initiative de l'entrepreneur M.Julien Ithurbide qui est directeur de cette entreprise<br>
                étant un grand amateur de vins et y voyant un potentiel marketing, il a avec quelques amis monté Bargylus</p>
    </div>
</div>



    <div class="container">
        <div class="row justify-content-center text-center align-items-center">
            <div class="col-md-8">
                <span class="sub-title">Welcome</span>
                <h2>About Us</h2>
            </div>
        </div>
    </div>



</div>

<div class="site-section py-5 bg-light custom-border-bottom" data-aos="fade">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <div class="block-16">
                    <figure>
                        <img src="images/grape.png" alt="Image placeholder" class="img-fluid ">
                        <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"
                           data-fancybox><span
                                    class="icon-play"></span></a>
                    </figure>
                </div>
            </div>
            <div class="col-md-5 mr-auto">

                <div class="site-section-heading pt-3 mb-4">
                    <h2 class="text-black font-heading-serif">Vins pour tous</h2>
                </div>
                <p>Du vin délicat et fin pour amateurs de vins en tous genre</p>


            </div>
        </div>
    </div>
</div>

<div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-truck text-primary"></span>
                </div>
                <div class="text">
                    <h2 class="font-heading-serif">Livraison gratuite</h2>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-refresh2 text-primary"></span>
                </div>
                <div class="text">
                    <h2 class="font-heading-serif">Satisfait ou remboursé</h2>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-help text-primary"></span>
                </div>
                <div class="text">
                    <h2 class="font-heading-serif">Support client</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="owl-carousel owl-slide-3 owl-slide">

            <blockquote class="testimony">
                <img src="images/person_1.jpg" alt="Image">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo quasi
                    quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti quae
                    placeat in cumque?&rdquo;</p>
                <p class="small text-primary">&mdash; Collin Miller</p>
            </blockquote>
            <blockquote class="testimony">
                <img src="images/person_2.jpg" alt="Image">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo quasi
                    quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti quae
                    placeat in cumque?&rdquo;</p>
                <p class="small text-primary">&mdash; Harley Perkins</p>
            </blockquote>
            <blockquote class="testimony">
                <img src="images/person_3.jpg" alt="Image">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo quasi
                    quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti quae
                    placeat in cumque?&rdquo;</p>
                <p class="small text-primary">&mdash; Levi Morris</p>
            </blockquote>
            <blockquote class="testimony">
                <img src="images/person_1.jpg" alt="Image">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo quasi
                    quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti quae
                    placeat in cumque?&rdquo;</p>
                <p class="small text-primary">&mdash; Allie Smith</p>
            </blockquote>

        </div>
    </div>
</div>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
