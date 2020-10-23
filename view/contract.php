<?php
/**
 *Created by bargylus.
 *FILE_NAME:about.php
 *USER:marwan
 *DATE:14.05.2020
 */
ob_start();
$title = "Bargylus- About";
?>

<div class="site-section  pb-0">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="scrollit">
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut beatae cupiditate deserunt
                    error
                    explicabo fugit id ipsam laborum magnam necessitatibus possimus quos reprehenderit, similique sunt
                    suscipit
                    ullam unde voluptate.
                </div>
                <div>Alias aliquid deleniti ea facere fuga fugit id impedit, itaque minus mollitia, nisi, quia rem sit.
                    Ab
                    accusamus
                    consequatur ea, eaque eius harum hic, illo inventore laboriosam reiciendis soluta sunt?
                </div>
                <div>Consectetur neque quia suscipit tempore temporibus veniam vitae. At atque cum eveniet ex fugit
                    incidunt
                    laudantium molestiae neque, nobis odit porro praesentium quae quaerat quibusdam repellendus rerum
                    velit
                    vitae
                    voluptate.
                </div>
                <div>Aliquid hic itaque nobis officiis pariatur, perspiciatis. Aliquid atque cum dicta dolor doloribus
                    excepturi hic
                    illo ipsa iste maiores, nisi non, odit optio quas quia quis repellat rerum sit voluptates.
                </div>
                <div>Aliquid blanditiis, deserunt ducimus earum enim error expedita iusto nesciunt, possimus quae soluta
                    velit. A
                    blanditiis deleniti, dolorem doloremque doloribus eius error facilis ipsam labore, non, obcaecati
                    pariatur
                    placeat sint?
                </div>

            </div>

            <a href="index.php?action=checkout" class="col-xl-4 btn-outline-primary text-center">Annuler</a>
            <a href="index.php?action=checkout" class="col-xl-4 btn-danger text-center">En arrière</a>
            <a href="index.php?action=checkout" class="col-xl-4 btn-primary text-center">Acheter maintenant</a>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
