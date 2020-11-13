<?php

/**
 **File :updatewien.php
 *User :Marwan.ALHELO
 *Project:bargylus
 *Date:24.09.2020
 */

ob_start();
$title = "Bargylus- About";
?>
<div class="site-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="col-lg-12 ">
                    <div class="section-title mb-5">
                        <h2 class="d-flex justify-content-center"> Editer le vin choisi</h2>
                    </div>
                <form method="post" action="index.php?action=editywine">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">winename</th>

                            <td><input type="text" name="wname" placeholder="par exemple pinot blanc" id="wname"
                                       class="form-control form-control-lg" required></td>

                        </tr>

                        <tr>
                            <th scope="row">Année</th>
                            <td><input type="number" name="wyear" placeholder="l'année" id="wyear" min="1980" max="2100"
                                       class="form-control form-control-lg" required></td>


                        </tr>
                        <tr>
                            <th scope="row">cépage</th>
                            <td><select name="grape">
                                    <?php
                                    foreach ($Ngrapes as $Ngrape) { ?>
                                        <option value="<?= $Ngrape['id'] ?>"><?= $Ngrape['name'] ?>
                                            - <?= $Ngrape['color'] ?></option>
                                    <?php } ?>
                                </select></td>


                        </tr>
                        <tr>
                            <th scope="row">promotion</th>
                            <td>
                                <select name="discount">
                                    <?php foreach ($Ndiscounts as $Ndiscount) { ?>
                                        <?php if ($Ndiscount['id'] == 1) { ?>
                                            <option value="<?= $Ndiscount['id'] ?>">Pas de promotions</option>
                                        <?php } else { ?>

                                            <option value="<?= $Ndiscount['id'] ?>"><?= $Ndiscount['percentage'] ?>
                                                % <?= $Ndiscount['start_date'] ?>
                                                - <?= $Ndiscount['end_date'] ?></option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </td>


                        </tr>
                        <tr>
                            <th scope="row">taux:d'alcool</th>
                            <td><input type="number" name="walcohol" placeholder="la taux d'alcool" min="1"
                                       class="form-control form-control-lg" required></td>


                        </tr>
                        <tr>
                            <th scope="row">Price</th>
                            <td><input type="number" name="wprice" id="tel" min="1" class="form-control form-control-lg"
                                       required></td>


                        </tr>
                        <tr>
                            <th scope="row">disponibilté</th>
                            <td><input type="number" name="wsize" id="tel" min="1" class="form-control form-control-lg"
                                       required></td>


                        </tr>
                        <tr>
                            <th scope="row">taille</th>
                            <td><input type="number" name="wsize" id="tel" min="1" class="form-control form-control-lg"
                                       required></td>


                        </tr>
                        </tbody>
                    </table>
                    <div class="row d-flex justify-content-center">
                        <div class="row ">
                            <div class="col-12 d-flex justify-content-center">
                                <a class="btn btn-info py-3 px-5" href="index.php?action=displaywines">Retour</a>
                                <input type="submit" value="Envoyer" class="btn btn-primary py-3 px-5 ">

                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    $content = ob_get_clean();
    require "gabarit.php";
    ?>
