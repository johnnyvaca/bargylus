<?php
/**
 *Created by bargylus.
 *FILE_NAME:contact.php
 *USER:marwan
 *DATE:14.05.2020
 */

ob_start();
$title = "Bargylus- facturation";
?>


<div class="site-section bg-light">
    <div class="container d-flex justify-content-center">
        <div class="row ">

            <div class="col-lg-12">
                <div class="section-title mb-5 text-center">
                    <h2>Insérer adresse de facturation</h2><br>
                </div>
                <form method="post" action="index.php?action=addInvoice">
                    <input type="hidden" name="id" value="<?=$user['id']?>">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="firstname">Prénom</label>
                            <input type="text" id="firstname" name="firstname" class="form-control form-control-lg"
                                   placeholder="Prénom" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="lastname">Nom</label>
                            <input   type="text" id="lastname" name="lastname" class="form-control form-control-lg"
                                   placeholder="Nom" required>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4 form-group">
                            <label for="street_home">Rue</label>
                            <input   type="text" id="street" name="street" class="form-control form-control-lg"
                                    placeholder="Rue" required>
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="zip">Code postal</label>
                            <input   type="text" id="zip" name="zip" class="form-control form-control-lg"
                                    placeholder="code postal" required>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="city">Ville</label>
                            <input   type="text" id="city" name="city" class="form-control form-control-lg"
                                   placeholder="Ville">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Ajouter une adresse de facturation" class="btn btn-primary col-xl-12">
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
