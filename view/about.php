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


<div class="site-section custom-border-bottom pt-0 pb-0 mb-0 mt-0 pr-0 mr-0 w-100" style="margin-right: 0"">
    <div class="container-fluid pr-0 mr-0 pr-0 mr-0 w-100  bg-black" style="margin-right: 0; padding-right: 0">
        <div class="row  pt-0 pb-0 mb-0 mt-0 w-100 pr-0 mr-0  " style="margin-right: 0; padding-right: 0">
            <div class="pr-0 mr-0 pl-0 ml-0  pt-0 pb-0 mb-0 mt-0  w-100 h-10  " style="margin-right: 0; padding-right: 0">
                <div class="pr-0 mr-0 pl-0 ml-0 pt-0 pb-0 mb-0 mt-0  w-100 h-10 " style="margin-right: 0; padding-right: 0">
                    <div class="pr-0 mr-0 pl-0 ml-0 pt-0 pb-0 mb-0 mt-0 w-100" style="margin-right: 0; padding-right: 0">
                        <img src="../images/mountain.jpg" alt="Image placeholder" class="pr-0 mr-0 w-100"
                             style="margin-right: 0; padding-right: 0; width: 100%">

                    </div>
                </div>
            </div>
        </div>
        <div class="row col-md-12 pr-0 mr-0 " style="margin-top: -50px;">
            <div class="col-md-1 pr-0 mr-0 " style="margin-top: -50px;"></div>


            <div class="col-md-11 pr-0 mr-0 "><h2 class="font-heading-serif text-danger" ">Quienes
                somos</h2></div>
        </div>

        <div class="row  col-md-12 pr-0 mr-0 " style="background: #94c4e0">
            <div class="col-md-1 pr-0 mr-0 "></div>
            <div class="col-md-11 pr-0 mr-0 ">


                <p class="text-light pr-0 mr-0 " style="background: #94c4e0">
                    La Iglesia Evangélica Apostólica del Nombre de Jesús es la organización religiosa no-católica más
                    grande de Ecuador.<br>
                    Su inicio es a partir del año 1958, y siendo una obra misionera extranjera de la Iglesia Pentecostal
                    Unida de Colombia, <br>
                    ahora cuenta con más de 1029 congregaciones y una gran membresía. También está predicando el
                    evangelio en 18 países, <br>
                    bajo la coordinación de la administración actual de la IEANJESUS Ecuador.<br>
                    <br>
                    Los países a los cuales la misión ecuatoriana ha llegado son: Bolivia, Brasil, Chile, Costa Rica, El
                    Salvador, Estados Unidos,<br>
                    Honduras, República Dominicana, Uruguay, Venezuela, Israel, Alemania, España, Francia, Italia, Reino
                    Unido, Rumania y Suiza.<br>
                    <br>
                    La actividad Evangelista y Misionera de la Iglesia tiene su sustento y apoyo en las Sagradas
                    Escrituras inspiradas por el mismo Dios.<br>
                    La misma que se ha constituido en un instrumento orientador y de referencia para todo el quehacer de
                    amor al prójimo.<br>
                    <br>
                    En esta línea, la Iglesia Evangélica Apostólica del nombre de Jesús, se ha enmarcado en los
                    siguientes principios rectores para elaborar <br>
                    sus planes de acción:
            </div>
        </div>

    </div>

</div>
<div class="site-section custom-border-bottom pt-0 pb-0 mb-5 mt-0" data-aos="fade">
    <div class="container-fluid">
        <div class="row col-md-11">
            <div class="col-md-1"></div>


            <div class="col-md-11 "><h2 class="font-heading-serif text-danger" style="align-items: center;">
                    Historia</h2></div>
        </div>
        <div class="row" style="background: #7fb1cc">
            <div class="col-md-1"></div>
            <div class="col-md-11 ">


                <p class="text-light " style="background: #7fb1cc">
                    La Iglesia Evangélica Apostólica del Nombre de Jesús es la organización religiosa no-católica más
                    grande de Ecuador.<br>
                    Su inicio es a partir del año 1958, y siendo una obra misionera extranjera de la Iglesia Pentecostal
                    Unida de Colombia, <br>
                    ahora cuenta con más de 1029 congregaciones y una gran membresía. También está predicando el
                    evangelio en 18 países, <br>
                    bajo la coordinación de la administración actual de la IEANJESUS Ecuador.<br>
                    <br>
                    Los países a los cuales la misión ecuatoriana ha llegado son: Bolivia, Brasil, Chile, Costa Rica, El
                    Salvador, Estados Unidos,<br>
                    Honduras, República Dominicana, Uruguay, Venezuela, Israel, Alemania, España, Francia, Italia, Reino
                    Unido, Rumania y Suiza.<br>
                    <br>
                    La actividad Evangelista y Misionera de la Iglesia tiene su sustento y apoyo en las Sagradas
                    Escrituras inspiradas por el mismo Dios.<br>
                    La misma que se ha constituido en un instrumento orientador y de referencia para todo el quehacer de
                    amor al prójimo.<br>
                    <br>
                    En esta línea, la Iglesia Evangélica Apostólica del nombre de Jesús, se ha enmarcado en los
                    siguientes principios rectores para elaborar <br>
                    sus planes de acción:</p>
            </div>
        </div>
    </div>
</div>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
