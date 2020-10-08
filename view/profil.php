<?php
ob_start();
$title = "profil_Page";
?>

<div class="row mb-5">
    <table>
        <tbody>
            <tr>
                <td><?= $_SESSION['user']['firstname'] ?></td>
            </tr>
            <tr>
                <td><?= $_SESSION['user']['lastname'] ?></td>
            </tr>
        </tbody>
    </table>
</div>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
