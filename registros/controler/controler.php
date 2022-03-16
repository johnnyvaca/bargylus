<?php
require "model/model.php";
function home2()
{

$date = date("Y-m-d");

$date2 = "2022-03-10";
$_SESSION["date"] = $date;


    $users = getUsers();
    $services = getServices();
    $cultos = getCulteByDate($_SESSION["date"]);
    if(!$cultos){
        $cultos = [
            '0'=>[
                'date' => $date
            ]
        ];
    }
    $datas = getDataByDate($_SESSION["date"]);


    require_once 'view/home.php';
}
function home3($date,$adultos,$ninos,$culto_id,$name,$services_id,$firstname,$lastname,$users_id)
{
    $cultos = getCulteByDate($_SESSION["date"]);
    $oneCulto = [
        'date' => $date,
        'adultos' => $ninos,
        'ninos' => $adultos
    ];
    createCulto($oneCulto);
    foreach($firstname as $key => $service){

        $oneUser = [
            'users_id' => $users_id[$key],
            'services_id' => $services_id[$key],
            'culte_id' => $cultos[0]["id"]
        ];

        createData($oneUser);

    }


    $_SESSION["date"] = $date;
    $users = getUsers();
    $cultos = getCulteByDate($_SESSION["date"]);
    $cultos = getCulteByDate($_SESSION["date"]);
    if(!$cultos){
        $cultos = [
            '0'=>[
                'date' => $date
            ]
        ];
    }
    $datas = getDataByDate($_SESSION["date"]);


    require_once 'view/home.php';
}
function create($date,$adultos,$ninos){
    $oneUser = [
        'date' => $date,
        'adultos' => $adultos,
        'ninos' => $ninos

    ];
}
function create2($date){
    $oneUser = [
        'date2' => $date

    ];


    home2();
}
