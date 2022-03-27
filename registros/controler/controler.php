<?php
require "model/model.php";
$_SESSION['base'] = $base = [
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

function home2()
{
    $date = date("Y-m-d");

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




    foreach ( $_SESSION['base'] as $key => $b){
        if(!in_array($b['name'],array_column($datas, 'name'))){
            $datas[sizeof($datas)]['name'] = $b['name'];
        }

    }


    require_once 'view/home.php';
}

function home3($dateNew, $adultos, $ninos, $culto_id, $name, $services_id, $firstname, $users_id, $id, $service, $first, $last)
{
    foreach ($firstname as $key => $item) {
        $userOld = explode(" ", $item);
        $users[$key] = getUserByFirstAndLastname($userOld[0], $userOld[1]);
    }

    foreach ($name as $key => $item) {
        $services[$key] = getServicesByName($item);
    }
    $cultos = getCulteByDate($_SESSION["date"]);

    if ($adultos != "" || $ninos != "") {
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


            $id = createCulto($oneCulto);

            $oneCulto['id'] = $id;

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
    }


    if ($name != "") {
        $length = count($name);
        for ($key = 0; $key < $length; $key++) {
            $isExist = getisExist($users[$key]['id'], $services[$key]['id'], $oneCulto['id']);

            if ($id[$key] == null && $isExist == null) {
                //  echo 'user: ' . $users[$key]['id'] . '  service: ' . $services[$key]['id'] . '  culte: ' . $oneCulto['id'] . '  id: ' . $id[$key] . '<br>';
                $oneUser = [
                    'users_id' => $users[$key]['id'],
                    'services_id' => $services[$key]['id'],
                    'culte_id' => $oneCulto['id']
                ];
                createData($oneUser);
            } else {
                if ($isExist == null) {
                    if ($users[$key]['id'] == false && $services[$key]['id'] == false) {
                        deleteData3($id[$key]);
                    } else {
                        updateDataById($users[$key]['id'], $services[$key]['id'], $id[$key]);
                    }

                }
            }

        }
    }
    if ($first != null && $last != null) {
        $isExist = getUserIfExist($first, $last);

        if ($isExist == null && $first != null && $last != null) {
            $id = addUserModel($first, $last);
        }
    }

    if ($service != null) {
        $isExist = getServiceIfExist($service);

        if ($isExist == null && $service != null) {
            $id = addServiceModel($service);
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

    foreach ( $base as $key => $b){
        var_dump($b['name']);
        if(!in_array($b['name'],array_column($datas, 'name'))){
            $datas[sizeof($datas)]['name'] = $b['name'];
        }

    }

    require_once 'view/home.php';
}


function deleteData2($id)
{

    deleteData3($id);
}

function addUser($firstname, $lastname)
{
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
    foreach ( $_SESSION['base'] as $key => $b){
        if(!in_array($b['name'],array_column($datas, 'name'))){
            $datas[sizeof($datas)]['name'] = $b['name'];
        }

    }
    require_once 'view/home.php';
}

function addService($service)
{
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
    foreach ( $_SESSION['base'] as $key => $b){
        if(!in_array($b['name'],array_column($datas, 'name'))){
            $datas[sizeof($datas)]['name'] = $b['name'];
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
