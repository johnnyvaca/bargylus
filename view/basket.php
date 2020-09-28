<?php

/**
 * *File :basket.php
 *User :Marwan.ALHELO
 *Project :bargylus
 *Date:10.09.2020
 */

ob_start();
$title = "Wine_Basket";
?>


<div class="site-section  pb-0">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-7 section-title text-center mb-5">
            <h2 class="d-block">Panier</h2>
          </div>
        </div>
        <div class="row mb-5">
          <form class="col-md-12" action="index.php" method="get">
              <input type="hidden" name="action" value="updateWinesBasket">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead> <?php //todo ?>
                <tr>  <!--traduction en français   -->
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Produit</th>
                    <th class="product-price">Prix</th>
                    <th class="product-quantity">Quantité</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Retirer</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($basketContentPost as $oneBasketContent){ ?>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/<?= $oneBasketContent['photo'] ?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 cart-product-title text-black"><?= $oneBasketContent['winename'] ?><br><?= $oneBasketContent['name'] ?><br><?= $oneBasketContent['color'] ?><br><?= $oneBasketContent['year']?></h2>
                    </td>
                    <td><?=  $oneBasketContent['priceWithSold']?> CHF</td>
                    <td>
                        <!-- applique le calcul ici Altin avec les boutons  -->
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <a class="btn btn-outline-primary js-btn-minus" type="button" >&minus;</a>
                        </div>
                        <input type="text" class="form-control text-center border-0 mr-sm-0" name='quantity[]' value="<?= $oneBasketContent['quantity'] ?>" placeholder=""
                          aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <a class="btn btn-outline-primary js-btn-plus" type="button">&plus;</a>
                        </div>
                      </div>

                    </td>
                      <!-- applique le calcul ici Altin -->
                    <td><?=$oneBasketContent['priceTotalOneWine']?>CHF</td>
                    <td><a href="index.php?action=removeWineBasket&id=<?=$oneBasketContent['id']?>" class="btn btn-primary height-auto btn-sm">X</a></td>
                      <?php } ?>
                  </tr>


                </tbody>
              </table>
            </div>
        </div>

      </div>
    </div>

    <div class="site-section pt-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-md btn-block">Mettre à jour le Panier</button>
              </div>
            </form>
              <div class="col-md-6">
                <a href="index.php?action=displaywines"><button class="btn btn-outline-primary btn-md btn-block" >Continuer Shopping</button></a>
              </div>
            </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Total du panier</h3>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?= $_SESSION['total'] ?> CHF</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.html'">Procéder au paiement</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




<?php
$content = ob_get_clean();
require "gabarit.php";
?>
