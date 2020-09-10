<?php
ob_start();
$title = "Bargylus - Admin";


?>

<table>
    <thead>
    <tr>
        <td>
            id
        </td>
        <td>
            year
        </td>
        <td>
            name
        </td>
    </tr>
    </thead>
    <tbody>
    <?php
        foreach($wines as $oneWine){ ?>
            <tr>
                <td><?= $oneWine['id'] ?></td>
                <td><?= $oneWine['year'] ?></td>
                <td><?= $oneWine['name'] ?></td>
            </tr>
     <?php   }
    ?>
    </tbody>
</table>


    <table>
        <thead>
        <tr>
            <td>
                id
            </td>
            <td>
                email
            </td>
            <td>
                lastname
            </td>
            <td>
                firstname
            </td>
            <td>
                phone number
            </td>
            <td>
                registration date
            </td>
            <td>
                birth date
            </td>
            <td>
                street home
            </td>
            <td>
                zip
            </td>
            <td>
                city
            </td>
            <td>
                canton
            </td>
            <td>
                droits
            </td>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($users as $oneUser){ ?>
            <tr>
                <td><?= $oneUser['id'] ?></td>
                <td><?= $oneUser['email'] ?></td>
                <td><?= $oneUser['lastname'] ?></td>
                <td><?= $oneUser['firstname'] ?></td>
                <td><?= $oneUser['phone_number'] ?></td>
                <td><?= $oneUser['registration_date'] ?></td>
                <td><?= $oneUser['birth_date'] ?></td>
                <td><?= $oneUser['street_home'] ?></td>
                <td><?= $oneUser['zip'] ?></td>
                <td><?= $oneUser['city'] ?></td>
                <td><?= $oneUser['canton'] ?></td>
                <td><?= $oneUser['droits'] ?></td>
            </tr>
        <?php   }
        ?>
        </tbody>
    </table>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>