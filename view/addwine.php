<?php

/**
 *File :addwine.php
 *User :Marwan.ALHELO
 *Project :bargylus
 *Date:24.09.2020
 */

ob_start();
$title = "Bargylus- AddnewWine";
?>


<div class="site-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 ">
                <div class="section-title mb-5">
                    <h2 class="d-flex justify-content-center"> Ajouter le nouveux vin</h2>
                </div>
                <form method="post">

                    <div class="row d-flex justify-content-center ">
                        <div class="col-md-3 form-group">
                            <label for="fname">Millésime</label>
                            <input type="date" id="fname" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="lname"> vin</label>
                            <input type="text" id="lname" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="eaddress">Alcool</label>
                            <input type="number" id="eaddress" min="1" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-md-3 form-group">
                            <label for="tel">prix</label>
                            <input type="number" id="tel" min="1" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="tel">taille</label>
                            <input type="number" id="tel" min="1" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="tel">stock</label>
                            <input type="number" id="tel"  min="1" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-12 d-flex justify-content-center">
                            <input type="submit" value="Ajouter" class="btn btn-primary py-3 px-5 ">
                        </div>
                    </div>

                </form>
            </div>

        </div>


    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>

