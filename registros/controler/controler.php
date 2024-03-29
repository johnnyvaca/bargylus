<?php
require "model/model.php";


function home2()
{
    // date("Y-m-d") "2023-02-22"
    $date = date("Y-m-d");
    $_SESSION["date_now"] = date("Y-m-d");
    $_SESSION["date"] = $date;
    $users = getUsers();
    $services = getServices();

    $cultos = getCulteByDate($_SESSION["date"]);

    if (!$cultos) {
        $cultos = [
            'date' => $_SESSION["date"]
        ];
    }
    $datas = getDataByDate($_SESSION["date"]);
    $base = [
        0 => [
            'name' => 'Recepción',
        ],
        1 => [
            'name' => 'Dirección',
        ],
        2 => [
            'name' => 'Vocalización',
        ],
        3 => [
            'name' => 'Bateria',
        ],
        4 => [
            'name' => 'Especial',
        ],
        5 => [
            'name' => 'Piano',
        ],
        6 => [
            'name' => 'Traducción',
        ],
        7 => [
            'name' => 'Transmisión',
        ],
        8 => [
            'name' => 'Proyección',
        ],
        9 => [
            'name' => 'Bajo',
        ],
        10 => [
            'name' => 'Ofrenda',
        ],
        11 => [
            'name' => 'Cocina',
        ],
        12 => [
            'name' => 'Guitarra',
        ],
        13 => [
            'name' => 'Anuncios',
        ],
    ];

    if ($_SESSION['date'] >= $_SESSION['date_now']) {
        foreach ($base as $key => $b) {
            if (!in_array($b['name'], array_column($datas, 'name'))) {
                $datas[sizeof($datas)]['name'] = $b['name'];
            }

        }
    }


    require_once 'view/home.php';
}

function home3($dateNew, $adultos, $ninos, $culto_id, $servicio_nombre, $services_id, $firstname, $users_id, $id, $service, $first, $last)
{
    

   
    
    if(isset($_SESSION["date"])){
        $_SESSION["date_now"] = date("Y-m-d");
    }else{

        $_SESSION["date_now"] = $_SESSION["date"];
    }

   
    

    if($firstname[0] != ""){

    foreach ($firstname as $key => $item) {
        $userOld = explode(" ", ucwords(strtolower($item)));
      
        if($userOld[0] != ""){
            $users[$key] = getUserByFirstAndLastname($userOld[0], $userOld[1]);
        }
        
    }
}else {
   // $users = "";
}



    foreach ($servicio_nombre as $key => $item) {

        $services[$key] = getServicesByName($item);
    }
  //  var_dump($services);
   // die();

    if (!($culto_id == "" &&( $ninos == "" || $ninos == 0) && ( $adultos == "" || $adultos == 0) && $firstname[0] == "")) {


        $cultos = getCulteByDate($_SESSION["date"]);

        if ($adultos != "" || $ninos != "" || $firstname[0] != "") {

            if (isset($cultos['id']) == false) {
                $oneCulto = [
                    'date2' => $_SESSION["date"],
                    'adultos' => $adultos,
                    'ninos' => $ninos
                ];


                if ($adultos == "") {
                    $oneCulto['adultos'] = 0;
                }
                if ($ninos == "") {
                    $oneCulto['ninos'] = 0;
                }


                $id2 = createCulto($oneCulto);

                $oneCulto['id'] = $id2;

            } else {
                $oneCulto = [
                    'date2' => $_SESSION["date"],
                    'adultos' => $adultos,
                    'ninos' => $ninos,
                    'id' => $cultos['id']
                ];


                if ($adultos == "") {
                    $oneCulto['adultos'] = 0;
                }
                if ($ninos == "") {
                    $oneCulto['ninos'] = 0;
                }
                updateCulto($oneCulto);
            }
        } else {

        }


        if ($servicio_nombre != "") {
            $length = count($servicio_nombre);
            for ($key = 0; $key < $length; $key++) {
                $isExist = getisExist($users[$key]['id'], $services[$key]['id'], $oneCulto['id']);

                if ($id[$key] == null && $isExist == null) {
                    if($users[$key]['id'] != '' && $users[$key]['id'] != null && $users[$key]['id'] != false){
                        $oneUser = [
                            'users_id' => $users[$key]['id'],
                            'services_id' => $services[$key]['id'],
                            'culte_id' => $oneCulto['id']
                        ];
                        createData($oneUser);
                    }
                } else {
                        if ($users[$key]['id'] == false && $services[$key]['id'] == false) {
                            deleteData3($id[$key]);
                        } else {
                            
                            updateDataById($users[$key]['id'], $services[$key]['id'], $id[$key]);
                            
                        }
                }

            }
        }
        if ($first != null && $last != null) {
            $first = ucwords(strtolower($first));
            $last = ucwords(strtolower($last));
            $isExist = getUserIfExist($first, $last);

            if ($isExist == null && $first != null && $last != null) {
                $id = addUserModel($first, $last);
            }
        }

        if ($service != null) {
            $service = ucwords(strtolower($service));
            $isExist = getServiceIfExist($service);

            if ($isExist == null && $service != null) {
                $id = addServiceModel($service);
            }
        }
    }

    $_SESSION["date"] = $dateNew;
    if ($_SESSION["date"] == null) {
        $_SESSION["date"] = date("Y-m-d");
    }

    $users = getUsers();
    $services = getServices();

    $cultos = getCulteByDate($_SESSION["date"]);
    if (isset($cultos['id']) == false) {
        $cultos = [
            'date' => $_SESSION["date"]
        ];
    }

    $datas = getDataByDate($_SESSION["date"]);


    $base = [
        0 => [
            'name' => 'Recepción',
        ],
        1 => [
            'name' => 'Anuncios',
        ],
        2 => [
            'name' => 'Dirección',
        ],
        3 => [
            'name' => 'Vocalización',
        ],
        4 => [
            'name' => 'Bateria',
        ],
        5 => [
            'name' => 'Especial',
        ],
        6 => [
            'name' => 'Piano',
        ],
        7 => [
            'name' => 'Traducción',
        ],
        8 => [
            'name' => 'Transmisión',
        ],
        9 => [
            'name' => 'Proyección',
        ],
        10 => [
            'name' => 'Bajo',
        ],
        11 => [
            'name' => 'Ofrenda',
        ],
        12 => [
            'name' => 'Cocina',
        ],
        13 => [
            'name' => 'Guitarra',
        ],
    ];
   //if ($_SESSION['date'] >= $_SESSION['date_now']) {
        foreach ($base as $key => $b) {
            if (!in_array($b['name'], array_column($datas, 'name'))) {
                $datas[sizeof($datas)]['name'] = $b['name'];
            }

        }
  //  }

    require_once 'view/home.php';
}


function deleteData2($id)
{

    deleteData3($id);
}

function addUser($firstname, $lastname)
{
    $_SESSION["date_now"] = date("Y-m-d");
    $firstname = ucwords(strtolower($firstname));
    $lastname = ucwords(strtolower($lastname));
    $isExist = getUserIfExist($firstname, $lastname);

    if ($isExist == null && $firstname != null && $lastname != null) {
        $id = addUserModel($firstname, $lastname);
    }
    $users = getUsers();
    $services = getServices();

    $cultos = getCulteByDate($_SESSION["date"]);

    if (!$cultos) {
        $cultos = [
            'date' => $_SESSION["date"]
        ];
    }
    $datas = getDataByDate($_SESSION["date"]);
    $base = [
        0 => [
            'name' => 'Recepción',
        ],
        1 => [
            'name' => 'Dirección',
        ],
        2 => [
            'name' => 'Vocalización',
        ],
        3 => [
            'name' => 'Bateria',
        ],
        4 => [
            'name' => 'Especial',
        ],
        5 => [
            'name' => 'Piano',
        ],
        6 => [
            'name' => 'Traducción',
        ],
        7 => [
            'name' => 'Transmisión',
        ],
        8 => [
            'name' => 'Proyección',
        ],
        9 => [
            'name' => 'Bajo',
        ],
        10 => [
            'name' => 'Ofrenda',
        ],
        11 => [
            'name' => 'Cocina',
        ],
        12 => [
            'name' => 'Guitarra',
        ],
        13 => [
            'name' => 'Anuncios',
        ],
    ];
    if ($_SESSION['date'] >= $_SESSION['date_now']) {
        foreach ($datas as $key => $b) {
            if (!in_array($b['name'], array_column($datas, 'name'))) {
                $datas[sizeof($datas)]['name'] = $b['name'];
            }

        }
    }
    require_once 'view/home.php';
}

function addService($service)
{
    $service = ucwords(strtolower($service));
    $_SESSION["date_now"] = date("Y-m-d");
    $isExist = getServiceIfExist($service);

    if ($isExist == null && $service != null) {
        $id = addServiceModel($service);
    }

    $users = getUsers();
    $services = getServices();

    $cultos = getCulteByDate($_SESSION["date"]);

    if (!$cultos) {
        $cultos = [
            'date' => $_SESSION["date"]
        ];
    }
    $datas = getDataByDate($_SESSION["date"]);
    $base = [
        0 => [
            'name' => 'Recepción',
        ],
        1 => [
            'name' => 'Dirección',
        ],
        2 => [
            'name' => 'Vocalización',
        ],
        3 => [
            'name' => 'Bateria',
        ],
        4 => [
            'name' => 'Especial',
        ],
        5 => [
            'name' => 'Piano',
        ],
        6 => [
            'name' => 'Traducción',
        ],
        7 => [
            'name' => 'Transmisión',
        ],
        8 => [
            'name' => 'Proyección',
        ],
        9 => [
            'name' => 'Bajo',
        ],
        10 => [
            'name' => 'Ofrenda',
        ],
        11 => [
            'name' => 'Cocina',
        ],
        12 => [
            'name' => 'Guitarra',
        ],
    ];
    if ($_SESSION['date'] >= $_SESSION['date_now']) {
        foreach ($base as $key => $b) {
            if (!in_array($b['name'], array_column($datas, 'name'))) {
                $datas[sizeof($datas)]['name'] = $b['name'];
            }

        }
    }
    require_once 'view/home.php';

}

function nouveau()
{
    $users = getUsers();
    $services = getServices();

    $cultos = getCulteByDate($_SESSION["date"]);

    if (!$cultos) {
        $cultos = [
            'date' => $_SESSION["date"]
        ];
    }
    $datas = getDataByDate($_SESSION["date"]);

    require_once 'view/home.php';
}
