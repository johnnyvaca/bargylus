<?php
/**
 *Created by bargylus.
 *FILE_NAME:DisplaywineControler.php
 *USER:marwa
 *DATE:21.09.2020
 */
require 'model/DisplaywienModel.php';


/* author : MOA */
function getWinesDisplay()
{
    $wines = getWines();
    foreach ($wines  as $i => $wine ) {

        $soldprice[$i] = $wine['basic_price'] - ($wine['basic_price'] * $wine['percentage'] / 100);
    }
    require_once 'view/wines.php';
}


/* author : MOA */
function WineDetail($id)
{
    $wine = getWine($id);


    require_once 'view/cartdetail.php';
}




