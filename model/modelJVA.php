<?php
/**
 *Created by bargylus.
 *FILE_NAME:model.php
 *USER:marwa
 *DATE:14.05.2020
 */


function createUser($oneUser)
{



    require "model/.constant.php";
    try {
        $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
        $query = "INSERT INTO users( email,  lastname,  firstname,  phone_number,  registration_date,  birth_date,  street_home,  zip,  city,  canton,  password) 
                  VALUES  (:email,  :lastname,  :firstname,  :phone_number,  :registration_date,  :birth_date,  :street_home,  :zip,  :city,  :canton,  :password)";
        $stmt = $dbh->prepare($query);
        $stmt->execute($oneUser);

     $stmt->fetch(PDO::FETCH_ASSOC);
        //    if($debug) var_dump($queryResult);
        $dbh->lastInsertId();
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!:" . $e->getMessage() . "<br/>";
        die();
    }
    //

}
