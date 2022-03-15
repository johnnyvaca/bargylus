<?php
require "model/model.php    ";
function home2()
{
  $users =  getUsers();
    $cultos = getCulto();
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
