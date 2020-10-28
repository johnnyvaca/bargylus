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
    foreach ($wines  as $i =>  $wine ) {

        $wines[$i]['sold_price'] = $wine['basic_price'] - ($wine['basic_price'] * $wine['percentage'] / 100);


    }
    require_once 'view/wines.php';
}


/* author : MOA */
function WineDetail($id)
{
    $wine = getWine($id);


        $wine['sold_price'] = $wine['basic_price'] - ($wine['basic_price'] * $wine['percentage'] / 100);

    require_once 'view/cartdetail.php';
}


function addNewWinePage()
{
    require_once 'model/DiscountModel.php';
    $Ndiscounts =  getDiscounts();
    $Ngrapes = getGrapes();


    require_once 'view/addwine.php';
}
function addWine($wyear, $wname, $walcohol, $wprice, $wsize,$wstock,$wphoto,$wdiscount){

    $Nwine = [
        'wyear' => $wyear,
        'wname' => $wname,
        'walcohol' => $walcohol,
        'wprice' => $wprice,
        'wsize' => $wsize,
        'wstock' => $wstock,
        'wdiscounts_id' => $wdiscount
    ];

    addNewWineToDisplay($Nwine);
    addNewWinePage();
}
