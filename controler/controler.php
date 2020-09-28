<?php
/**
 *Created by bargylus.
 *FILE_NAME:controler.php
 *USER:marwa
 *DATE:14.05.2020
 */

require 'model/model.php';

function home()
{
    getWinesSolds();


    require_once 'view/home.php';
}



function basketPage($basketContentPost)
{
    //pour chaque vin dans la session augemente le prix du total dans une session
    $_SESSION['total'] = 0;
    foreach($basketContentPost as $oneBasketContentPost)
    {
        $_SESSION['total'] +=$oneBasketContentPost['priceTotalOneWine'];
    }

    require_once 'view/basket.php';
}

function aboutPage()
{

    require_once 'view/about.php';
}

function contactPage()
{

    require_once 'view/contact.php';
}

function LoginPage()
{
    require_once 'view/login.php';
}

function pageAdmin()
{
  $stateOther =  array(1,2,3);

 $orders = getOrders();




foreach ( $orders  as  $order){
    if($order['state']){

    }
}

    require_once 'view/admin.php';
}

function tryLogin($emailPost, $passwordPost)
{
    $user = getUserByEmail($emailPost);
    if ($emailPost == $user['email']) {


        if (password_verify($passwordPost, $user['password'])) {
            unset($user['password']);
            $_SESSION['user'] = $user;
            $_SESSION['flashmessage'] = 'Bienvenue ' . $user['firstname'] . $user['lastname'];

            if ($user['droits'] == 1) {
                pageAdmin();
            } else {
                getWinesDisplay();
            }
        } else {
            unset($_SESSION['user']);
            $_SESSION['flashmessage'] = 'email ou password erroné';
            LoginPage();
        }
    }
}

function logout()
{

    unset($_SESSION['user']);
    require_once 'view/home.php';
}


function signupPage()
{
    require_once 'view/signup.php';
}

function signup($email, $lastname, $firstname, $phoneNumber, $day, $month, $year, $streetHome, $zip, $city, $canton, $password)
{
    $user = getUserByEmail($email);
    if ($email == $user['email']) {
        unset($_SESSION['user']);
        $_SESSION['flashmessage'] = 'l\'email est déjà utilisé';
        signupPage();
        return;
    } else {
        $_SESSION['flashmessage'] = 'Bienvenu!!! vous êtes connectés';
    }
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $oneUser = [
        'email' => $email,
        'lastname' => $lastname,
        'firstname' => $firstname,
        'phone_number' => $phoneNumber,
        'registration_date' => date('Y-m-d'),
        'birth_date' => $year . '-' . $month . '-' . $day,
        'street_home' => $streetHome,
        'zip' => $zip,
        'city' => $city,
        'canton' => $canton,
        'password' => $hash,
        'droits' => 0
    ];
    createUser($oneUser);
    tryLogin($email, $password);

}

//(Altin) Fonction qui ajoute un vin dans la session
// et supprime une bouteille dans la base de données
function addWinesBasket($idWinePost, $quantity)
{

    $wines = $_SESSION['basket'];
    foreach ($wines as $i =>$wine){
        if($wine['id'] == $idWinePost ){
            $_SESSION['basket'][$i]['quantity'] += $quantity;

            $_SESSION['basket'][$i]['priceTotalOneWine'] = $_SESSION['basket'][$i]['quantity']*$_SESSION['basket'][$i]['priceWithSold'];
            $_SESSION['totalQuantity'] += $quantity;


        $_SESSION['flashmessage'] = 'Vin ajouté dans le panier';
        withdrawWineBottle($idWinePost, $quantity);
        getWinesDisplay();
            return 0;
        }
    }

   if($quantity == null){
       $quantity = 1;
   }
    $oneWine['totalQuantity'] = 0;
    $oneWine = getWineBottle($idWinePost);
    $oneWine['priceWithSold'] = $oneWine['basic_price'] - ($oneWine['basic_price'] * $oneWine['percentage'] / 100);
    $oneWine['priceTotalOneWine'] = $quantity*$oneWine['priceWithSold'];
    $oneWine['quantity'] = $quantity;
    $_SESSION['basket'][] = $oneWine;
    $_SESSION['totalQuantity'] = 0;
$wines = $_SESSION['basket'];
    foreach ($wines as $wine){
        $_SESSION['totalQuantity'] += $wine['quantity'];
    }

    $_SESSION['flashmessage'] = 'Vin ajouté dans le panier';
    withdrawWineBottle($idWinePost, $quantity);
    getWinesDisplay();

}

//Supprime un vin du Basket et update dans la base de donnée en ajoutant un vin dans le stock
function removeWinesBasket($idWinePost)
{
    foreach ($_SESSION['basket'] as $i => $oneContent) {
        if ($oneContent['id'] == $idWinePost) {
            $quantity = $oneContent['quantity'];
            $_SESSION['totalQuantity'] -= $oneContent['quantity'];
            unset($_SESSION['basket'][$i]);
        }
    }
    if($_SESSION['totalQuantity'] == 0){
        unset($_SESSION['totalQuantity']);
    }
    addWineBottle($idWinePost,$quantity);
    basketPage($_SESSION['basket']);
}



