<?php

function getUsers()
{
    require ".constant.php";
    try {
        $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
        $query = 'SELECT * FROM users ';
        $statment = $dbh->prepare($query);//prepare query, il doit faire des vérifications et il va pas exécuter tant
        //qu'il y a des choses incorrects
        $statment->execute();//execute query
        $queryResult = $statment->fetchAll(PDO::FETCH_ASSOC);//prepare result for client cherche tous les résultats
        $dbh = null; //refermer une connection quand on a fini
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}


$users = getUsers();

foreach ($users as $oneUser) {
    require ".constant.php";
    $hash = password_hash($oneUser['firstname'], PASSWORD_DEFAULT);
    echo $oneUser['firstname'] . " => $hash\n";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    $query = 'UPDATE users SET password=:password WHERE id=:id';
    $statment = $dbh->prepare($query);//prepare query, il doit faire des vérifications et il va pas exécuter tant
    //qu'il y a des choses incorrects
    $statment->execute(['id' => $oneUser['id'], 'password' => $hash]);//execute query
    $dbh = null; //refermer une connection quand on a fini
}


?>
