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
            <h2 class="text-center">Sign Up</h2>
        </div>
    </div>
</div>


<div class="site-section bg-light">
    <div class="container d-flex justify-content-center">
        <div class="row ">

            <div class="col-lg-12">
                <div class="section-title mb-5 text-center">
                    <h2>Sign up</h2>
                </div>
                <form method="post" action="index.php?action=signup">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="email">Adresse Email</label>
                            <input type="text" id="email" name="email" class="form-control form-control-lg"
                                   placeholder="Adresse Email" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="password">Mot de Passe</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg"
                                   placeholder="Mot de Passe" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="firstname">Prénom</label>
                            <input type="text" id="firstname" name="firstname" class="form-control form-control-lg"
                                   placeholder="Prénom" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="lastname">Nom</label>
                            <input type="text" id="lastname" name="lastname" class="form-control form-control-lg"
                                   placeholder="Nom" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="birth_date">Jour</label>
                            <select type="text" id="birth_date" name="day" class="form-control form-control-lg" required>
                                <?php
                                for ($i = 1; $i <= 31; $i++) { ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="birth_date">Mois</label>
                            <select type="text" id="month" name="month" class="form-control form-control-lg" required>
                                <option value="1">Janvier</option>
                                <option value="2">Fevrier</option>
                                <option value="3">Mars</option>
                                <option value="4">Avril</option>
                                <option value="5">Mai</option>
                                <option value="6">Juin</option>
                                <option value="7">Juillet</option>
                                <option value="8">Août</option>
                                <option value="9">Septembre</option>
                                <option value="10">Octobre</option>
                                <option value="11">Novembre</option>
                                <option value="12">Décembre</option>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="birth_date">year</label>
                            <select type="text" id="birth_date" name="year" class="form-control form-control-lg"
                                    placeholder="birth date" required>
                                <?php
                                for ($i = date('Y')-16; $i >= 1900; $i--) { ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="phone_number">Numéro de téléphone</label>
                            <input type="text" id="phone_number" name="phone_number"
                                   class="form-control form-control-lg" placeholder="Numéro de téléphone" required>
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="street_home">Rue</label>
                            <input type="text" id="street_home" name="street_home" class="form-control form-control-lg"
                                   placeholder="Rue" required>
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="zip">Code postal</label>
                            <input type="text" id="zip" name="zip" class="form-control form-control-lg"
                                   placeholder="code postal" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="city">Ville</label>
                            <input type="text" id="city" name="city" class="form-control form-control-lg"
                                   placeholder="Ville">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="canton">Canton</label>
                            <input type="text" id="canton" name="canton" class="form-control form-control-lg"
                                   placeholder="Canton">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="signUp" class="btn btn-primary py-3 px-5">
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
