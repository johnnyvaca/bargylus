<?php
/**
 *Created by bargylus.
 *FILE_NAME:model.php
 *USER:marwa
 *DATE:14.05.2020
 */


///Connexion à la base de donnée
///créer par marwan
///
function getPDO()
{
    require "model/.constant.php";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $dbh;
}


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
        if ($debug) var_dump($queryResult);
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
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function createUser($oneUser)
{
    $dbh = getPDO();
    try {
        $query = "INSERT INTO users( email,  lastname,  firstname,  phone_number,  registration_date,  birth_date,  street_home,  zip,  city,  canton,  password,droits) 
                  VALUES  (:email,  :lastname,  :firstname,  :phone_number,  :registration_date,  :birth_date,  :street_home,  :zip,  :city,  :canton,  :password,:droits)";
        $stmt = $dbh->prepare($query);
        $stmt->execute($oneUser);

        $dbh->lastInsertId();
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!:" . $e->getMessage() . "<br/>";
        die();
    }
    //
}

// montrer les articles de vin
function getWines()
{
    require "model/.constant.php";
    $dbh = getPDO();
    try {
        /*
        $query = 'SELECT * FROM wines            
                        INNER JOIN wines_compose_bottles on  wines.id = wines_compose_bottles.wine_id  
                        INNER JOIN bottles on  wines_compose_bottles.bottle_id =bottles.id ';*/
        $query = 'SELECT * FROM wines            
                        INNER JOIN wines_compose_grapes on  wines.id = wines_compose_grapes.wine_id  
                        INNER JOIN grapes on  wines_compose_grapes.grape_id =grapes.id';
        $statment = $dbh->prepare($query);
        $statment->execute();//prepare query
        $queryResult = $statment->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }


}


// show one wine or item

function getWine($id)
{


    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM bargylus_db.wines,grapes where wines.id=:id and grapes.id=:id';
        $statment = $dbh->prepare($query);
        $statment->execute(['id' => $id]);//prepare query
        $queryResult = $statment->fetch(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
        if ($debug) var_dump($queryResult);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }

}

//(ALTIN)fonction qui cherche une bouteille avec toutes ses informations
function getWineBottle($id)
{


    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM wines INNER JOIN wines_compose_bottles on  wines.id = wines_compose_bottles.wine_id  
                        INNER JOIN bottles on  wines_compose_bottles.bottle_id =bottles.id WHERE wines.id =:id';
        $statment = $dbh->prepare($query);
        $statment->execute(['id' => $id]);//prepare query
        $queryResult = $statment->fetch(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
        if ($debug) var_dump($queryResult);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }

}

//(ALTIN)fonction qui Update le stock d'une bouteille
function withdrawWineBottle($id)
{
    try {
        $dbh = getPDO();
        $query = 'UPDATE bottles INNER JOIN wines_compose_bottles on  bottles.id = wines_compose_bottles.bottle_id  
                        INNER JOIN wines on  wines_compose_bottles.wine_id = wines.id set stock = stock - 1 WHERE wines.id =:id';
        $statment = $dbh->prepare($query);
        $statment->execute(['id' => $id]);//prepare query
        $queryResult = $statment->fetch(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}


function getSolds()
{
    // pour l'affichage debuge
    require "model/.constant.php";
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM wines INNER JOIN discounts on  wines.discounts_id = discounts.id ';
        $statment = $dbh->prepare($query);
        $statment->execute();//prepare query
        $queryResult = $statment->fetchall(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
        } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
        }


}
