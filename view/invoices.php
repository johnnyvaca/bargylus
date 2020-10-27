<?php
ob_start();
$title = "Facturation";
?>
<div class="site-section  pb-0">
    <div class="container">

        <div class="row mb-5 justify-content-center">

            <h2 class="d-block">Choisir adresse de facturation </h2>
        </div>
        <form action="index.php?action=payPage" method="post">
            <input type="hidden" name="id" value="<?=$user['id']?>">
        <div class="row">

            <?php foreach ($invoices as $i => $invoice) {
                ?>

                <div class="col-lg-3 mb-3 col-md-3">

                    <div class="wine_v_1 text-center pb-4">

                        <div>

                                <span class="price">  <h3><?= $invoice['firstname'] ?> <?= $invoice['lastname'] ?>
                                </h3><?= $invoice['street'] ?><br> <?= $invoice['zip'] ?> <?= $invoice['city'] ?><br></span>
                            <a class="col-12 btn-primary" href="index.php?action=modifyInvoice&invoice_id=<?= $invoice['invoice_id']?>&id=<?=$user['id']?>">modifier</a>
                            <input type="radio" name="invoiceSelected" value="<?= $invoice['invoice_id'] ?>">
                        </div>

                    </div>
                </div>
                <?php
            } ?>
        </div>
            <button class="btn  btn-primary" >changer adresse facturation</button>
            <a class="btn  btn-primary" href="index.php?action=addInvoicePage&id=<?=$user['id']?>" >Ajouter une nouvelle adresse</a>
        </form>


    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
