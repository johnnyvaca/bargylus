<?php
require "model/model.php";
function home2()
{

$date = date("Y-m-d");

$_SESSION["date"] = $date;

    $users = array_column(getUsers(), 'value');

    $users = getUsers();
    $services = getServices();
    $cultos =getCulteByDate($_SESSION["date"]);
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

    $services = getServices();

    $users = getUsers();

    $userOld = '';
    $keyDeleted = 0;
echo $culto_id.'<br>';
    foreach ($users as $key => $user) {
        foreach ($firstname as $key2 => $item) {


                    $userOld = explode(" ", $item);
                        if ($user['firstname'] == $userOld[0] && $user['lastname'] == $userOld[1]) {
             //               echo $userOld[0].' '. $userOld[1].' - '. $key2.'<br>';
                            $userId[$key2] = $user['id'];
                        }
        }
// echo '<br>';
        unset($firstname[$keyDeleted]);
        $keyDeleted+=1;
    }

$userId2 = ksort($userId,SORT_NUMERIC);
echo '<br><br>';


    $keyDeleted = 0;
    foreach ($services as $key => $user) {

        foreach ($name as $key2 => $item) {

                        if ($item == $user['name']) {
                            echo $user['name'].' - '. $item.'<br>';
                            $serviceId[$key2] = $user['id'];
                        }
                    }
        echo '<br>';
        unset($name[$keyDeleted]);
        $keyDeleted+=1;
    }
var_dump($userId);
    echo '<br><br>';
var_dump($serviceId);


    $cultos = getCulteByDate($_SESSION["date"]);

    if(isset($ninos) == false){
        $ninos = 0;
    }
    if(isset($adultos) == false){
        $adultos = 0;
    }
    if(isset($culto_id) == false){
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


    echo '------------------------------------------------------';
if(!isset($id)){

    foreach($datas as $key => $data){
      echo  '<br>';
      if($culto_id == $data['culte_id']){
     foreach ($name as $key2 => $service){
      echo  $serviceId[$key2] .' - '.$userId[$key2] .'<br>';
/*
            echo $data['users_id'] .' - '.$data['services_id'].' - '. $data['culte_id'] .' || ';
        //   echo '<br>BDD: - user: ' .$data['users_id'] .' ||  service:'. $data['services_id'] . ' || '. $data['culte_id'];
         //  echo '<br>MOI: - user: ' .$userId[$key2] .' ||  service:'. $serviceId[$key2] . ' || ' . $culto_id. '<br>' ;
         if(($userId[$key2] == $data['users_id'] && $serviceId[$key2] == $data['services_id'])){
             $oneUser = [
                 'users_id' => $userId[$key2],
                 'services_id' => $serviceId[$key2],
                 'culte_id' => $culto_id
             ];
             print_r($oneUser);
             createData($oneUser);
         }
         */
        }
     }
      /*  if( in_array($data['users_id'],$userId) == false && in_array($data['services_id'], $serviceId) == false  && in_array($data['culte_id'], array_column($oneCulto,'id')) == false  ){

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
        */
    }
}

    $_SESSION["date"] = $dateNew;

    $cultos = getCulteByDate($_SESSION["date"]);
    if($cultos == false){
        $cultos = [
            '0'=>[
                'date' => $dateNew
            ]
        ];
    }

    $datas = getDataByDate($_SESSION["date"]);



    require_once 'view/home.php';
}
