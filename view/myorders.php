<?php
ob_start();
$title = "Bargylus - mes achats";
?>
    <div class="site-section mt-5">
        <div class="container">
            <?php foreach ($orders as $i => $order) { ?>

                <a href="index.php?action=order&id=<?=$order['id_order']?>">
                <div class="row mb-5 bg-primary text-white">

                    <?php if ($orders[$i]['number'] != $orders[$i - 1]['number']) {
                        ?>
                        <div class="col-3">commande : <?= $order['number'] ?></div>
                        <div class="col-3">date : <?= $order['date_purchase'] ?></div>
                        <div class="col-3">total : <?= $order['total_price'] ?> CHF</div>
                        <div class="col-3">état :<?= $order['state_name'] ?></div>
                        <?php
                    } ?>


                </div>
                </a>
                <?php if ($orders[$i]['number'] != $orders[$i - 1]['number']) {
                    ?>
                    <div class="row">

                        <?php foreach ($wines as $w => $wine) {
                            if ($orders[$i]['number'] == $wines[$w]['number']) {
                                ?>

                                <div class="col-lg-2 mb-2 col-md-2">

                                    <div class="wine_v_1 text-center pb-3">
                                        <a href="index.php?action=winedetail&id=<?= $wine['wine_id'] ?>"
                                           class="thumbnail d-block mb-4"><img
                                                    src="images/<?= $wine['photo'] ?>" alt="Image"
                                                    class="img-fluid"></a>
                                        <div>
                                            <h3 class="heading mb-1"><a href="#"><?= $wine['winename'] ?>
                                                    x<?= $wine['quantity'] ?></a></h3>
                                            <span class="price"><?= $wine['price_wine'] * $wine['quantity'] ?> CHF</span>
                                        </div>

                                    </div>
                                </div>
                            <?php }
                        } ?>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>