<?php
/**
 *Created by bargylus.
 *FILE_NAME:DiscountControler.php
 *USER:marwa
 *DATE:21.09.2020
 */
require 'model/DiscountModel.php';



function getWinesSolds()
{
    $solds = getSolds();

    $today = date("Y, m, j,");

    foreach ($solds as $i => $sold) {

        $soldprice[$i] = $sold['basic_price'] - ($sold['basic_price'] * $sold['percentage'] / 100);
    }
    require_once 'view/home.php';

}