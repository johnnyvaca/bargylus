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
    $datas2 = getData();
$test = 0;
    foreach($datas2 as $key => $data){


        if($data['users_id'] != $userId[$key] && $data['services_id'] != $serviceId[$key] && $data['culte_id'] != $oneCulto['id']){
          if(!($userId[$key] === NULL || $serviceId[$key] === NULL)){
              var_dump($userId[$key] .' - '.$serviceId[$key].' - '.$oneCulto['id'].'<br>');
              $oneUser = [
                  'users_id' => $userId[$key],
                  'services_id' => $serviceId[$key],
                  'culte_id' => $oneCulto['id']
              ];
              ////////////////  var_dump($oneUser);
              createData($oneUser);
              $test = $test+1;
          }

        }


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



    require_once 'view/home.php';
}
