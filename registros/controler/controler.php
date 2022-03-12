<?php

function home2()
{
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
