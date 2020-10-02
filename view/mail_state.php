<?php
ob_start();

?>


<div class="justify-content-center">
    <div class=" section-title text-center ">
        <h3 class="d-block">Commande <?= $order[0]['number'] ?></h3>
    </div>
</div>
<!--class="mx-auto" style="width: 200px;"-->
<div class="justify-content-center">
    <div class=" section-title text-center ">
        <span class="btn btn-primary py-1 px-1"><h3><?= $order[0]['state_name'] ?></h3></span>
    </div>
</div>
<br>
<div class="row ">
        <div class="site-blocks-table">
            <p><b>Liste de votre commande</b></p>
            <table class="table table-bordered">
                <thead> <?php //todo ?>
                <tr>  <!--traduction en français   -->
                    <!-- <th class="product-thumbnail">Image</th> -->
                    <th class="product-name">Vin</th>
                    <th class="product-price">Prix CHF</th>
                    <th class="product-quantity">Quantit&eacute;</th>
                    <th class="product-total">Total CHF</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($order

                as $oneOrder){ ?>
                <tr>
                    <!--
                                <td class="product-thumbnail">
                                    <img src="https://bargylus.mycpnv.ch/images/<?= $oneOrder['photo'] ?>" alt="Image" class="img-fluid">
                                </td>
                                -->
                    <td>
                        <b><?= $oneOrder['winename'] ?></b>
                    </td>
                    <td><?= $oneOrder['price_wine'] ?></td>
                    <td>
                        <?= $oneOrder['quantity'] ?>
                    </td>
                    <!-- applique le calcul ici Altin -->
                    <td><?php echo $oneOrder['quantity'] * $oneOrder['price_wine'] ?></td>
                    <?php } ?>
                </tr>


                </tbody>
            </table>
        </div>
</div>

<div class="site-section pt-5 bg-light">

    <div class="col-md-6 pl-5">
        <div class="row justify-content-end">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12 text-right border-bottom mb-5">
                        <h3 class="text-black h4 text-uppercase">TOTAL PRIX COMMANDE</h3>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6 text-right">
                        <strong class="text-black"><?= $oneOrder['total_price'] ?> CHF</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit_email.php";
?>
