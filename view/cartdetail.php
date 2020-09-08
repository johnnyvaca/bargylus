<?php
/**
 *Created by bargylus.
 *FILE_NAME:cartdetail.php
 *USER:marwan
 *DATE:07.09.2020
 */

ob_start();
$title = "Wine_Details";


?>


<div class="site-section bg-primary py-5 page-title-wrap mt-5">
    <div class="container">
        <h1><?= $wine ['name'] ," ", $wine['year'] ," ", $wine['type'] ?> </h1>
    </div>
</div>


<div class="site-section mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="owl-carousel hero-slide owl-style">
                    <img src="images/<?= $wine['photo'] ?>" alt="<?= $wine['name']," ", $wine['year'] ?>" class="img-fluid">

                </div>
            </div>
            <div class="col-lg-5 ml-auto">
                <h2 class="text-primary">Wine Details</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non eos inventore aspernatur voluptatibus
                    ratione odit molestias molestiae, illum et impedit veniam modi sunt quas nam mollitia earum
                    perferendis, dolorem. Magni.</p>

                <div class="mb-5">
                    <div class="input-group mb-3" style="max-width: 200px;">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center border mr-0" value="1" placeholder=""
                               aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                    </div>

                </div>
                <p><a href="cart.html" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>

            </div>
        </div>
    </div>
</div>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>

