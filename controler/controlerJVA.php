<?php



function signupPage(){
require_once 'view/signup.php';
}
function signup($email,$lastname,$firstname,$phoneNumber,$birthDate,$streetHome,$zip,$city,$canton,$password){
require 'model/modelJVA.php';
    //   email, lastname, firstname, phone_number, registration_date, birth_date, street_home, zip, city, canton, password
    $user = [
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
       'password' => $password
    ];

createUser($user);

    require 'view/signup.php';
}