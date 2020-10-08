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
                            <label for="email">Email Address</label>
                            <input type="text" id="email" name="email" class="form-control form-control-lg"
                                   placeholder="Email Address">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg"
                                   placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" id="lastname" name="lastname" class="form-control form-control-lg"
                                   placeholder="lastname">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="firstname">firstname</label>
                            <input type="text" id="firstname" name="firstname" class="form-control form-control-lg"
                                   placeholder="firstname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="birth_date">day</label>
                            <select type="text" id="birth_date" name="day" class="form-control form-control-lg"
                                    placeholder="birth date">
                                <?php
                                for ($i = 1; $i <= 31; $i++) { ?>
                                    <option><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="birth_date">month</label>
                            <select type="text" id="birth_date" name="month" class="form-control form-control-lg"
                                    placeholder="birth date">
                                <?php
                                for ($i = 1; $i <= 12; $i++) { ?>
                                    <option><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="birth_date">year</label>
                            <select type="text" id="birth_date" name="year" class="form-control form-control-lg"
                                    placeholder="birth date">
                                <?php
                                for ($i = 2020; $i >= 1940; $i--) { ?>
                                    <option><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="phone_number">phone</label>
                            <input type="text" id="phone_number" name="phone_number"
                                   class="form-control form-control-lg" placeholder="phone number">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="street_home">street</label>
                            <input type="text" id="street_home" name="street_home" class="form-control form-control-lg"
                                   placeholder="street home">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="zip">zip</label>
                            <input type="text" id="zip" name="zip" class="form-control form-control-lg"
                                   placeholder="zip">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="city">city</label>
                            <input type="text" id="city" name="city" class="form-control form-control-lg"
                                   placeholder="city">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="canton">canton</label>
                            <input type="text" id="canton" name="canton" class="form-control form-control-lg"
                                   placeholder="canton">
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
