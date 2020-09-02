<?php
/**
 *Created by bargylus.
 *FILE_NAME:index.php
 *USER:marwan
 *DATE:14.05.2020
 */

require "controler/controler.php";
require "controler/controlerJVA.php";

session_start();
// to go home by default
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

switch ($action) {

    case'wines':
        winesDisplay();

        break;
    case'about':
        aboutPage();

        break;
    case'contact':
        contactPage();

        break;
    case'login':
        loginPage();
        break;
    case 'tryLogin':
        $email = $_POST['email'];
        $password = $_POST['password'];
        trylogin($email, $password);

        break;
    case 'signupPage':
        signupPage();
        break;
    case 'signup':
        $email = $_POST['email'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $phone_number = $_POST['firstname'];
        $registration_date = $_POST['firstname'];
        $birth_date = $_POST['firstname'];
        $street_home = $_POST['firstname'];
        $firstname = $_POST['zip'];
        $firstname = $_POST['city'];
        $firstname = $_POST['city'];
        $firstname = $_POST['city'];
        signup();
        break;


    default;
        home();

        break;
}