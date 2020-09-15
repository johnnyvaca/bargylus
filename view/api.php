<?php

/**
 * *File :basket.php
 *User :Marwan.ALHELO
 *Project :bargylus
 *Date:10.09.2020
 */

ob_start();
$title = "API";
?>
<div class="mx-auto">
    <nav class="site-navigation position-relative text-left" role="navigation">
        <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">

<p>   </p><p>   </p><p>   </p><p>   </p><p>   </p><p>   </p><p>   </p><p>   </p><p>   </p>
<form method="post" action="index.php?action=api">
    <input type="text" name="username" placeholder="username">
    <input type="text" name="hash" placeholder="hash">
    <input type="text" name="sender" placeholder="sender">
    <input type="text" name="number" placeholder="number">
    <textarea name="message" placeholder="message"></textarea>
    <input type="submit" name="abc" value="send">
</form>
<p>   </p><p>   </p><p>   </p><p>   </p><p>   </p><p>   </p><p>   </p><p>   </p><p>   </p
</ul>
</nav>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
