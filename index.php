<?php
/**
 *Created by bargylus.
 *FILE_NAME:index.php
 *USER:marwan
 *DATE:14.05.2020
 */

require "controler/controler.php";
require "controler/DiscountControler.php";
require "controler/DisplaywineControler.php";

session_start();
// to go home by default
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}



switch ($action) {

    case'displaywines':

       getWinesDisplay();
        break;
    case'winedetail':
        $idwine = $_GET['id'];

        WineDetail($idwine);
        break;

    case'about':
        aboutPage();

        break;
    case'basket':
        $basketContent = $_SESSION['basket'];
        basketPage($basketContent);
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
    case 'adminPage':
        pageAdmin();
        break;
    case 'logout';

        logout();

        break;
    case 'signupPage':
        signupPage();
        break;
    case 'signup':
        $email = $_POST['email'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $phoneNumber = $_POST['phone_number'];
        $day = $_POST['day'];$month = $_POST['month'];$year = $_POST['year'];
        $streetHome = $_POST['street_home'];
        $zip = $_POST['zip'];
        $city = $_POST['city'];
        $canton = $_POST['canton'];
        $password = $_POST['password'];
        signup($email,$lastname,$firstname,$phoneNumber,$day,$month,$year,$streetHome,$zip,$city,$canton,$password);
        break;
    //(Altin) Appelle la fonction addWinesBasket
    case 'winesBasket':
        $idWine = $_GET['id'];
        $quantity = $_GET['quantity'];
        addWinesBasket($idWine,$quantity);
        break;
    case "updateWinesBasket":
        $quantity = $_GET['quantity'];
        updateBasket($quantity);
        break;
    case 'removeWineBasket':
        $idWine = $_GET['id'];
        removeWinesBasket($idWine);
        break;

    default;
        home();
        break;
}