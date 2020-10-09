<?php
ob_start();
$title = "Bargylus - mes achats";

?>
    <div class="site-section mt-5">
        <div class="container">
            <?php foreach ($orders as $i => $order) { ?>


                <div class="row mb-5">

                    <?php if ($orders[$i]['number'] != $orders[$i - 1]['number']) {
                        ?>
                        <div class="col-3">commande : <?= $order['number'] ?></div>
                        <div class="col-3">date : <?= $order['date_purchase'] ?></div>
                        <div class="col-3">total : <?= $order['total_price'] ?></div>
                        <div class="col-3">état :<?= $order['state_name'] ?></div>
                        <?php
                    } ?>


                </div>
                <?php if ($orders[$i]['number'] != $orders[$i - 1]['number']) {
                    ?>
                    <div class="row">

                        <?php var_dump($wines); foreach ($wines as $w => $wine) {
                            if ($wines[$w]['wine_id'] != $wines[$w - 1]['wine_id']) {
                                ?>

                                <div class="col-lg-3 mb-3 col-md-3">

                                    <div class="wine_v_1 text-center pb-3">
                                        <a href="index.php?action=winedetail&id=<?= $wine['id'] ?>"
                                           class="thumbnail d-block mb-4"><img
                                                    src="images/<?= $wine['photo'] ?>" alt="Image"
                                                    class="img-fluid"></a>
                                        <div>
                                            <h3 class="heading mb-1"><a href="#"><?= $wine['winename'] ?></a></h3>
                                            <span class="price"><?= $wine[$i] ?> CHF</span>
                                        </div>
                                        <div class="wine-actions">

                                            <h3 class="heading-2"><a href="#"><?= $wine['winename'] ?></a></h3>
                                            <span class="price d-block">

                                    <del> <?= $wine['basic_price'] ?> CHF </del><br>
                                    <?= $wine[$i] ?>CHF</span>

                                            <div class="rating">
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star-o"></span>
                                            </div>
                                            <!-- si le vin est épuisé -->
                                            <?php if ($wine['stock'] > 0) { ?>
                                                <a href="index.php?action=winesBasket&id=<?= $wine['id'] ?>"
                                                   class="btn add"><span
                                                            class="icon-shopping-bag mr-3"></span> ajouter au panier
                                                </a>
                                            <?php } else { ?>
                                                <span>vin épuisé</span>
                                            <?php } ?>
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