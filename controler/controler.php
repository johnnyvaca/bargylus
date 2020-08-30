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

function winesDisplay()
{

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

    if($passwordPost == $user['firstname'])
    {
        unset($user['firstname']);
        $_SESSION['user'] = $user;
        $_SESSION['flashmessage'] = 'Bienvennue '.$user['lastname'];
        require_once 'view/wines.php';
    } else {
        unset($_SESSION['user']);
        $_SESSION['flashmessage'] = 'email ou password erroné';
        require_once 'view/login.php';
    }
}

?>