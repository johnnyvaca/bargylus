<?php
/**
 *Created by bargylus.
 *FILE_NAME:contact.php
 *USER:marwan
 *DATE:14.05.2020
 */

ob_start();
$title = "Bargylus- Login";
?>


<div class="container">
    <div class="row justify-content-center text-center align-items-center">
        <div class="col-md-8">
            <h2 class="text-center">Login</h2>
        </div>
    </div>
</div>


<div class="site-section bg-light">
    <div class="container d-flex justify-content-center">
        <div class="row ">

            <div class="col-lg-12">
                <div class="section-title mb-5 text-center">
                    <h2>Login</h2>
                </div>
                <form method="post" action="index.php?action=tryLogin">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="eaddress">Adresse email</label>
                            <input type="text" id="eaddress" name="email" class="form-control form-control-lg"
                                   placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="fname">Mot de passe</label>
                            <input type="password" id="fname" name="password" class="form-control form-control-lg"
                                   placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="connexion" class="btn btn-primary py-3 px-5">
                            <a href="index.php?action=signupPage"
                               class="btn btn-primary py-3 px-5">s'inscrire</a>

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
