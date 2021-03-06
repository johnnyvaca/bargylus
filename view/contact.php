<?php
/**
 *Created by bargylus.
 *FILE_NAME:contact.php
 *USER:marwan
 *DATE:14.05.2020
 */

ob_start();
$title = "Bargylus- contact";
?>


<div class="container">
    <div class="row justify-content-center text-center align-items-center">
        <div class="col-md-8">
            <span class="sub-title">Get In Touch</span>
            <h2>Contact</h2>
        </div>
    </div>
</div>


<div class="site-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-title mb-5">
                    <h2 class="d-flex justify-content-center">Contactez-nous</h2>
                </div>
                <form method="post" action="index.php?action=newsletters">

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="fname">Prénom</label>
                            <input type="text" name="firstname" id="fname" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="lname">Nom</label>
                            <input type="text" name="lastname"  id="lname" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="eaddress">Adresse email</label>
                            <input type="text" name="adresse"  id="eaddress" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="tel">Numéro de tél.</label>
                            <input type="text" name="phone" id="tel" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Envoyer Message" class="btn btn-primary py-3 px-5">
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
