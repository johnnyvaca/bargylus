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

?>