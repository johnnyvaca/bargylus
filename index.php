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

    case'wines';
        winesDisplay();

        break;
    case'about';
        aboutPage();

        break;
    case'contact';
        contactPage();

        break;

    default;
        home();

        break;
}