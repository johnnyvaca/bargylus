<?php
/**
 *Created by bargylus.
 *FILE_NAME:home.php
 *USER:marwan
 *DATE:14.05.2020
 */

ob_start();

?>
    <form method="post" action="index.php?action=signup">
       <p>hello</p>
        <input type="text" placeholder="fecha">
        <input type="text" placeholder="hora"><br>
        <input type="text" placeholder="quantidad adultos">
        <input type="text" placeholder="quantidad niños"><br>
        <input type="text" placeholder="recepcion"><br>
        <input type="text" placeholder="recepcion"><br>
        <input type="text" placeholder="piano"><br>
        <input type="text" placeholder="bateria"><br>
        <input type="text" placeholder="bajo"><br>
        <input type="text" placeholder="piano"><br>
        <input type="text" placeholder="guitarra"><br>
        <input type="text" placeholder="direccion"><br>
        <input type="text" placeholder="predicacion"><br>
        <input type="text" placeholder="coro"><br>
        <input type="text" placeholder="coro"><br>
        <input type="text" placeholder="coro"><br>
        <input type="text" placeholder="ofrenda"><br>
        <input type="text" placeholder="ofrenda"><br>
        <input type="text" placeholder="proyeccion"><br>
        <input type="text" placeholder="transmission"><br>
        <input type="text" placeholder="cocina"><br>
        <input type="text" placeholder="cocina"><br>
        <input type="text" placeholder="cocina"><br>
    </form>

<?php
$content2 = ob_get_clean();
require "view/gabarit.php";
?>