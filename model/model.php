<?php
/**
 *Created by bargylus.
 *FILE_NAME:model.php
 *USER:marwa
 *DATE:14.05.2020
 */

function getUsers()
{
    require "model/.constant.php";
    try {
        $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
        $query = 'SELECT * FROM users ';
        $statment = $dbh->prepare($query);//prepare query, il doit faire des vérifications et il va pas exécuter tant
        //qu'il y a des choses incorrects
        $statment->execute();//execute query
        $queryResult = $statment->fetchAll(PDO::FETCH_ASSOC);//prepare result for client cherche tous les résultats
        $dbh = null; //refermer une connection quand on a fini
        if($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getUserByEmail($email)
{
    require "model/.constant.php";
    try {
        $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
        $query = 'SELECT * FROM users WHERE email=:email';
        $statment = $dbh->prepare($query);//prepare query, il doit faire des vérifications et il va pas exécuter tant
        //qu'il y a des choses incorrects
        $statment->execute(['email' => $email]);//execute query
        $queryResult = $statment->fetch(PDO::FETCH_ASSOC);//prepare result for client cherche tous les résultats
        $dbh = null; //refermer une connection quand on a fini
        if($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}
function createUser($user)
{
    try {
        $pdo = getPDO();
        $query = "INSERT INTO users(email, lastname, firstname, phone_number, registration_date, birth_date, street_home, zip, city, canton, password) 
                  VALUES (:email, :lastname, :firstname, :phone_number, :registration_date, :birth_date, :street_home, :zip, :city, :canton, :password)";
        $stmt = $pdo->prepare("$query");
        $stmt->execute($user);
        $queryResult = $stmt->fetch(PDO::FETCH_ASSOC);
        $user['id'] = $pdo->lastInsertId();

        $pdo = null;
        return $user['id'];
    } catch (PDOException $e) {
        print "Error!:" . $e->getMessage() . "<br/>";
        die();
    }

}
