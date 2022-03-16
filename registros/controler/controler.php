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
function home3($date,$adultos,$ninos,$culto_id,$name,$services_id,$firstname,$lastname,$users_id)
{
    $cultos = getCulteByDate($_SESSION["date"]);
    foreach($firstname as $key => $service){

        $oneUser = [
            'users_id' => $users_id[$key],
            'services_id' => $services_id[$key],
            'culte_id' => $cultos[0]["id"]
        ];
        var_dump($oneUser); ?> <br><?php
        createData($oneUser);

    }


    $_SESSION["date"] = $date;
    $users = getUsers();
    $cultos = getCulteByDate($_SESSION["date"]);
    $datas = getDataByDate($_SESSION["date"]);


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


    home2();
}
