<?php
require "model/model.php    ";
function home2()
{

$date = date("Y-m-d");
$datet   = "2022-03-10";
$users = getUsers();
$cultos = getCulte($datet);
var_dump($cultos);
    require_once 'view/home.php';
}
function create($date,$adultos,$ninos,$services_id,$users_id){
    $oneUser = [
        'date' => $date,
        'adultos' => $adultos,
        'ninos' => $ninos,
        'services_id' => $services_id,
        'users_id' => $users_id

    ];
}
function create2($date){
    $oneUser = [
        'date2' => $date

    ];

    createCulto($oneUser);
    home2();
}
