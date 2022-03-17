<?php
require "model/model.php";
function home2()
{

$date = date("Y-m-d");

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
function home3($dateNew,$adultos,$ninos,$culto_id,$name,$services_id,$firstname,$users_id)
{
////////// var_dump($firstname);

    $services = getServices();
    $users = getUsers();
    foreach ($users as $key => $user){
        $userOld = explode(" ",$firstname[$key]);

      ////////  var_dump($userOld);
        if($user['firstname'] = $userOld[0] && $user['lastname'] = $userOld[1] ){
            $userId[$key] = $user['id'];

        }
    }

    foreach ($services as $key => $service){
        if($service['name'] = $name[$key]){
            $serviceId[$key] = $service['id'];
        }
    }

    $cultos = getCulteByDate($_SESSION["date"]);


    if(!$ninos){
        $ninos = 0;
    }
    if(!$adultos){
        $adultos = 0;
    }
    if(!$culto_id){
        $oneCulto = [
            'date2' => $_SESSION["date"],
            'adultos' => $adultos,
            'ninos' => $ninos
        ];
        $id = createCulto($oneCulto);
        $oneCulto['id'] =$id;
    }else{
        $oneCulto = [
            'date2' => $_SESSION["date"],
            'adultos' => $adultos,
            'ninos' => $ninos,
            'id' => $culto_id
        ];
        updateCulto($oneCulto);
    }
    foreach($firstname as $key => $service){

        $oneUser = [
            'users_id' => $userId[$key],
            'services_id' => $serviceId[$key],
            'culte_id' => $oneCulto['id']
        ];
        var_dump($oneUser);
        createData($oneUser);

    }


    $_SESSION["date"] = $dateNew;

    $cultos = getCulteByDate($_SESSION["date"]);
    if(!$cultos){
        $cultos = [
            '0'=>[
                'date' => $dateNew
            ]
        ];
    }

    $datas = getDataByDate($_SESSION["date"]);
    var_dump($datas);


    require_once 'view/home.php';
}
