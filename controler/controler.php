<?php
/**
 *Created by bargylus.
 *FILE_NAME:controler.php
 *USER:marwa
 *DATE:14.05.2020
 */

require_once 'model/model.php';

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

function tryLogin($emailPost, $passwordPost)
{
    $user = getUserByEmail($emailPost);
    require_once 'view/wines.php';

    if(password_verify($passwordPost,$user['password']))
    {
        unset($user['password']);
        $_SESSION['user'] = $user;
        $_SESSION['flashmessage'] = 'Bienvenue '.$user['firstname'].$user['lastname'];
        require_once 'view/wines.php';
    } else {
        unset($_SESSION['user']);
        $_SESSION['flashmessage'] = 'email ou password erroné';
        require_once 'view/login.php';
    }
}
function signupPage(){
    require_once 'view/signup.php';
}
function signup($email,$lastname,$firstname,$phoneNumber,$birthDate,$streetHome,$zip,$city,$canton,$password){

    $hash   = password_hash($password, PASSWORD_DEFAULT);

    $oneUser = [
        'email' => $email,
        'lastname' => $lastname,
        'firstname' => $firstname,
        'phone_number' => $phoneNumber,
        'registration_date' => date('Y-m-d'),
        'birth_date' => $birthDate,
        'street_home' => $streetHome,
        'zip' => $zip,
        'city' => $city,
        'canton' => $canton,
        'password' => $hash
    ];

    createUser($oneUser);

    require 'view/signup.php';
}

?>