<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <style type="text/css">
        table, th, td, tr {

            border-spacing: 0;
        }

        table {
            width: 100%;
        }

        th, .foot {
            /*     background-color: #925186; */
            background-color: #c984d4;
        }

        thead, th {
            border: #c984d4;
        }
    </style>

</head>

<body>
<table>
    <thead>
    <tr>
        <th colspan="4"><p><img alt="vide" src="https://bargylus.mycpnv.ch/images/logo.png"></p></th>
    </tr>
    <tr>
        <th colspan="4"><h2>Commande <?= $order[0]['number'] ?></h2></th>
    </tr>
    <tr>
        <th colspan="4"><h2><?= $order[0]['state_name'] ?></h2></th>
    </tr>
    <tr>
        <th colspan="4">
            <!-- <button onclick="window.location.href = 'https://bargylus.mycpnv.ch/';">Voir votre commande</button></th> -->
            <a href="https://www.bargylus.mycpnv.ch/"> Voir votre commande</a>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td></td>
        <td>Lieu de livraison</td>
        <td>Mode de payement</td>
        <td></td>

    </tr>
    <tr>
        <td></td>
        <td><?= $user['firstname'] ?> <?= $user['lastname'] ?></td>
        <td rowspan="2"><?= $order[0]['total_price'] ?> CHF</td>
        <td></td>

    </tr>
    <tr>
        <td></td>
        <td><?= $user['street_home'] ?></td>
        <!--  <td>3333</td> -->
        <td></td>

    </tr>
    <tr>
        <td></td>
        <td><?= $user['city'] ?> <?= $user['zip'] ?></td>
        <td>Visa</td>
        <td></td>

    </tr>
    <tr>
        <td></td>
        <td><?= $user['phone_number'] ?></td>
        <td>****345</td>
        <td></td>

    </tr>
    <tr>
        <td colspan="4">...</td>

    </tr>
    <tr>
        <td colspan="4">Contenu de votre commande</td>
    </tr>
    <!-- LISTE DE VINS -->
    <?php foreach ($order as $value) { ?>
        <tr>
            <td rowspan="3"><img src="https://bargylus.mycpnv.ch/images/<?= $value['photo'] ?>" width="150"
                                 style="width: 70%; max-width: 125px;"></td>

            <td colspan="2"><?= $value['winename'] ?> x<?= $value['quantity'] ?></td>
            <td><?= $value['price_wine'] * $value['quantity'] ?> CHF</td>

        </tr>
        <tr>
            <td colspan="2" rowspan="2"><?= $value['price_wine'] ?> CHF</td>

        </tr>
        <tr>

        </tr>
    <?php } ?>
    <tr>
        <td></td>
        <td colspan="2">Prix Total</td>
        <td><?= $order[0]['total_price'] ?> CHF</td>
    </tr>
    <tr class="foot ">
        <td></td>
        <td>
            <a href="https://www.bargylus.mycpnv.ch/index.php?action=contact">Contact</a>
        </td>
        <td>
            <a href="https://www.bargylus.mycpnv.ch/index.php?action=displaywines">Nos vins</a>
        </td>
        <td></td>
    </tr>
    <tr>

        <td colspan="4"> ...</td>
    </tr>
    </tbody>
</table>

</body>

</html>