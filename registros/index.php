<?php
/**
 *Created by bargylus.
 *FILE_NAME:index.php
 *USER:marwan
 *DATE:14.05.2020
 */

require "controler/controler.php";

session_start();
// to go home by default
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}


switch ($action) {

    case 'signup':
        var_dump($_POST["date"]);
        var_dump($_POST["adultos"]);
        var_dump($_POST["ninos"]);

        var_dump($_POST["name"]);
        var_dump($_POST["firstname"]);
        var_dump($_POST["lastname"]);
        home3($_POST["date"],$_POST["adultos"],$_POST["ninos"],$_POST["name"],$_POST["firstname"],$_POST["lastname"]);
        break;
    default :
        home2();
        break;
}