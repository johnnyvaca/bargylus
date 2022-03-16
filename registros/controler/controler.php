<?php
require "model/model.php    ";
function home2()
{

$date = date("Y-m-d");
$date2 = "2022-03-10";
$_SESSION["date"] = $date2;
$users = getUsers();
$cultos = getCulteByDate($date2);
 $datas = getDataByDate($date2);


    require_once 'view/home.php';
}
function home3($date,$adultos,$ninos,$name,$fisrtname,$lastname)
{
foreach($datas as $data){
    
}


    $users = getUsers();
    $cultos = getCulteByDate($date);
    $datas = getDataByDate($date);

    $_SESSION["date"] = $date;
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
