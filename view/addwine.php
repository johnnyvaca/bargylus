<?php

/**
 *File :addwine.php
 *User :Marwan.ALHELO
 *Project :bargylus
 *Date:24.09.2020
 */

ob_start();
$title = "Bargylus- About";
//todo add wine


?>
+
<div class="site-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 ">
                <div class="section-title mb-5">
                    <h2 class="d-flex justify-content-center"> Ajouter le nouveux vin</h2>
                </div>
                <form method="post" action="index.php?action=addwine">

                    <div class="row d-flex justify-content-center ">
                        <div class="col-md-3 form-group">
                            <label for="fname">Millésime</label>
                            <input type="number" name="wyear" placeholder="l'année" id="wyear" min="1980" max="2100"
                                   class="form-control form-control-lg" required>

                        </div>
                        <div class="col-md-3 form-group">
                            <label for="lname"> vin</label>
                            <input type="text" name="wname" placeholder="par exemple pinot blanc" id="wname"
                                   class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="eaddress">Alcool</label>
                            <input type="number" name="walcohol" placeholder="la taux d'alcool" min="1"
                                   class="form-control form-control-lg" required>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-md-3 form-group">
                            <label for="tel">prix</label>
                            <input type="number" name="wprice" id="tel" min="1" class="form-control form-control-lg"
                                   required>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="tel">taille</label>
                            <input type="number" name="wsize" id="tel" min="1" class="form-control form-control-lg"
                                   required>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="tel">stock</label>
                            <input type="number" id="tel" name="wstock" min="1" class="form-control form-control-lg"
                                   required>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-3 form-group">
                            <input id="browse" type="file" name="wphoto" multiple>
                            <div id="preview"></div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">

                        <div class="col-md-3 form-group">
                            <label for="tel">Cépage</label>
                            <select name="grape">
                                <?php
                                 foreach ($Ngrapes as $Ngrape ){ ?>
                                <option value="<?= $Ngrape['id']?>"><?= $Ngrape['name']?> - <?= $Ngrape['color']?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="tel">promotion</label>
                            <select name="discount">
                                <?php foreach ($Ndiscounts as $Ndiscount) { ?>
                                    <?php if ($Ndiscount['id'] == 1){ ?>
                                    <option value="<?= $Ndiscount['id'] ?>">Pas de promotions</option>
                                        <?php } else {?>

                                    <option value="<?= $Ndiscount['id'] ?>"><?= $Ndiscount['percentage'] ?>
                                        % <?= $Ndiscount['start_date'] ?> - <?= $Ndiscount['end_date'] ?></option>
                                        <?php }?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="row ">
                            <div class="col-12 d-flex justify-content-center">
                                <input type="submit" value="Ajouter" class="btn btn-primary py-3 px-5 ">
                                <a class="btn btn-info py-3 px-5" href="index.php?action=displaywines">Retour</a>
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

