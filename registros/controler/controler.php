<?php
require "model/model.php";
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
    require_once 'view/home.php';
}

function home3($dateNew, $adultos, $ninos, $culto_id, $name, $services_id, $firstname, $users_id, $id)
{
    foreach ($firstname as $key => $item) {
        $userOld = explode(" ", $item);
        $users[$key] = getUserByFirstAndLastname($userOld[0], $userOld[1]);
    }

    foreach ($name as $key => $item) {
        $services[$key] = getServicesByName($item);
    }
    $cultos = getCulteByDate($_SESSION["date"]);

    if (!($adultos == "" || $ninos == "")) {
        if (isset($cultos['id']) == false) {

            $oneCulto = [
                'date2' => $_SESSION["date"],
                'adultos' => $adultos,
                'ninos' => $ninos
            ];
            $id = createCulto($oneCulto);

            $oneCulto['id'] = $id;

        } else {
            $oneCulto = [
                'date2' => $_SESSION["date"],
                'adultos' => $adultos,
                'ninos' => $ninos,
                'id' => $cultos['id']
            ];
            updateCulto($oneCulto);
        }
    }

    $length = count($name);
    if ($name != "") {
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


    $_SESSION["date"] = $dateNew;
    $users = getUsers();
    $services = getServices();

    $cultos = getCulteByDate($_SESSION["date"]);
    if (isset($cultos['id']) == false) {
        $cultos = [
            'date' => $_SESSION["date"]
        ];
    }
    $datas = getDataByDate($_SESSION["date"]);


    require_once 'view/home.php';
}


function deleteData2($id)
{

    deleteData3($id);
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

function addUser($firstname, $lastname)
{

    $isExist = getUserIfExist($firstname, $lastname);

    if ($isExist == null) {
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

    require_once 'view/home.php';
}
