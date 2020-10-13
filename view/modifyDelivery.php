<?php
/**
 *Created by bargylus.
 *FILE_NAME:contact.php
 *USER:marwan
 *DATE:14.05.2020
 */

ob_start();
$title = "Bargylus- sign up";
?>


<div class="container">
    <div class="row justify-content-center text-center align-items-center">
        <div class="col-md-8">
            <h2 class="text-center">Modifier données de livraison</h2>
        </div>
    </div>
</div>


<div class="site-section bg-light">
    <div class="container d-flex justify-content-center">
        <div class="row ">

            <div class="col-lg-12">
                <div class="section-title mb-5 text-center">
                    <h2>Modifier données de livraison</h2><br>
                </div>
                <form method="post" action="index.php?action=updateDelivery">
                    <input type="hidden" name="id" value="<?=$delivery['delivery_id']?>">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="firstname">Prénom</label>
                            <input type="text" id="firstname" name="firstname" value="<?=$delivery['firstname']?>" class="form-control form-control-lg"
                                   placeholder="Prénom" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="lastname">Nom</label>
                            <input value="<?=$delivery['lastname']?>"  type="text" id="lastname" name="lastname" class="form-control form-control-lg"
                                   placeholder="Nom" required>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4 form-group">
                            <label for="street_home">Rue</label>
                            <input  value="<?=$delivery['street']?>" type="text" id="street" name="street" class="form-control form-control-lg"
                                   placeholder="Rue" required>
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="zip">Code postal</label>
                            <input  value="<?=$delivery['zip']?>" type="text" id="zip" name="zip" class="form-control form-control-lg"
                                   placeholder="code postal" required>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="city">Ville</label>
                            <input value="<?=$delivery['city']?>"  type="text" id="city" name="city" class="form-control form-control-lg"
                                   placeholder="Ville">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Modifier livraison" class="btn btn-primary py-3 px-5">
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
