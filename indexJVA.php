<?php
/**
 *Created by bargylus.
 *FILE_NAME:index.php
 *USER:marwan
 *DATE:14.05.2020


require "controler/controlerJVA.php";

session_start();
// to go home by default
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}
*/
$action = '';
switch ($action) {


    case 'signupPage':
        signupPage();
        break;
    case 'signup':
        $email = $_POST['email'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $phoneNumber = $_POST['phone_number'];
        $birthDate = $_POST['birth_date'];
        $streetHome = $_POST['street_home'];
        $zip = $_POST['zip'];
        $city = $_POST['city'];
        $canton = $_POST['canton'];
        $password = $_POST['password'];
        signup($email,$lastname,$firstname,$phoneNumber,$birthDate,$streetHome,$zip,$city,$canton,$password);
        break;
    default;
        home();

        break;
}