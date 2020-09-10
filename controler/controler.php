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

    require_once 'view/home.php';
}
/* author : MOA */
function getWinesDisplay()
{
    $wines= getWines();


    require_once 'view/wines.php';
}
/* author : MOA */
function WineDetail($id)
{
    $wine= getWine($id);


    require_once 'view/cartdetail.php';
}
function basketPage(){



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
    $wines = getWines();
    $users = getUsers();

    require_once 'view/admin.php';
}

function tryLogin($emailPost, $passwordPost)
{
    $user = getUserByEmail($emailPost);

    if(password_verify($passwordPost,$user['password']))
    {
        unset($user['password']);
        $_SESSION['user'] = $user;
        $_SESSION['flashmessage'] = 'Bienvenue '.$user['firstname'].$user['lastname'];

        if($user['droits'] == 1){
            pageAdmin();
        }else{
            getWinesDisplay();
        }
    } else {
        unset($_SESSION['user']);
        $_SESSION['flashmessage'] = 'email ou password erroné';
        LoginPage();
    }
}

function logout(){

    unset($_SESSION['user']);
    require_once 'view/home.php';
}



function signupPage(){
    require_once 'view/signup.php';
}
function signup($email,$lastname,$firstname,$phoneNumber,$day,$month,$year,$streetHome,$zip,$city,$canton,$password){



    $user = getUserByEmail($email);
    if($email == $user['email']){
        unset($_SESSION['user']);
        $_SESSION['flashmessage'] = 'l\'email est déjà utilisé';
        signupPage();
        return;
    }
else{
    $_SESSION['flashmessage'] = 'Bienvenu!!! vous êtes connectés';
}
    $hash   = password_hash($password, PASSWORD_DEFAULT);

    $oneUser = [
        'email' => $email,
        'lastname' => $lastname,
        'firstname' => $firstname,
        'phone_number' => $phoneNumber,
        'registration_date' => date('Y-m-d'),
        'birth_date' => $year.'-'.$month.'-'.$day,
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




?>