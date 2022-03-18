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

    $services = array_unique(getServices());

    $users = array_unique(getUsers());
   // var_dump($services);
  //  var_dump($users);
    $userOld = [];
    foreach ($users as $key => $user){
        $userOld = explode(" ",$firstname[$key]);

        if($user['firstname'] == $userOld[0] && $user['lastname'] == $userOld[1] ){
            $userId[$key] = $user['id'];
        }
    }

    foreach ($services as $key => $service){
        if($service['name'] == $name[$key]){
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
    $datas = getData();
$test = 0;
    foreach($datas as $key => $data){

        if( !(in_array($data['users_id'],$userId) && in_array($data['services_id'], $serviceId) && in_array($data['culte_id'], array_column($oneCulto,'id')) )){

            if(!(in_array(null,$userId) || in_array(null, $serviceId))){
              $oneUser = [
                  'users_id' => $userId[$key],
                  'services_id' => $serviceId[$key],
                  'culte_id' => $oneCulto['id']
              ];
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
