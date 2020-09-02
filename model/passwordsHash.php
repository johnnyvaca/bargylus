<?php

require_once "model.php";


$users = getUsers();

foreach ($users as $user)
{
    $hash = password_hash($user['firstname'], PASSWORD_DEFAULT);
        require ".constant.php";
        try {
            $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
            $query = 'UPDATE users SET password=:password WHERE id=:id ';
            $statment = $dbh->prepare($query);//prepare query, il doit faire des vérifications et il va pas exécuter tant
            //qu'il y a des choses incorrects
            $statment->execute(['id'=> $user['id'], 'password' => $hash]);//execute query
            $dbh = null; //refermer une connection quand on a fini
            if($debug) var_dump($queryResult);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return null;
        }
}






?>
