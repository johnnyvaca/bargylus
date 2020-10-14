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
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname . ';charset=utf8', $user, $pass);
    return $dbh;
}


function getUsers()
{
    require "model/.constant.php";
    try {
        $dbh = getPDO();
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

function getUserById($id)
{
    require "model/.constant.php";
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM users WHERE id=:id';
        $statment = $dbh->prepare($query);//prepare query, il doit faire des vérifications et il va pas exécuter tant
        //qu'il y a des choses incorrects
        $statment->execute(['id' => $id]);//execute query
        $queryResult = $statment->fetch(PDO::FETCH_ASSOC);//prepare result for client cherche tous les résultats
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


//(ALTIN)fonction qui cherche une bouteille avec toutes ses informations au panier
function getWineBottle($id)
{


    try {
        $dbh = getPDO();
        /*
         * JOHNNY: j'ai rajouté inner join discounts pour les prix a calculer dans le basket
         *
        $query = 'SELECT * FROM wines INNER JOIN wines_compose_grapes on  wines.id = wines_compose_grapes.wine_id  
                        INNER JOIN grapes on  wines_compose_grapes.grape_id = grapes.id WHERE wines.id =:id';
        */

        $query = 'SELECT wines.id,wines.year,wines.winename,wines.alcohol,wines.basic_price,wines.size,
                    wines.size,wines.stock,wines.discounts_id,grapes.name,grapes.color,
                        discounts.percentage,discounts.start_date,discounts.end_date, wines.photo FROM wines            
                        INNER JOIN wines_compose_grapes on  wines.id = wines_compose_grapes.wine_id  
                        INNER JOIN grapes on  wines_compose_grapes.grape_id =grapes.id
                         INNER JOIN discounts ON wines.discounts_id = discounts.id WHERE wines.id =:id;
                        ';
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
function withdrawWineBottle($id, $quantity)
{
    try {
        $dbh = getPDO();
        $query = 'UPDATE wines set stock = stock - ' . $quantity . ' WHERE wines.id =:id';
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

function addWineBottle($id, $quantity)
{
    try {
        $dbh = getPDO();
        $query = 'UPDATE wines set stock = stock + ' . $quantity . ' WHERE wines.id =:id';
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

function getOrdersById($id)
{
    require "model/.constant.php";
    $dbh = getPDO();
    try {

        $query = "select users.id, users.firstname, users.lastname,wines.winename, users.email, orders_contain_wines.quantity, 
                    orders_contain_wines.price as 'price_wine',  orders.date_purchase, 
                    orders.number, orders.states_id, orders.total_price, orders.id AS 'id_order', states.name AS 'state_name', states.id AS 'state_id', wines.photo, wines.id as 'wine_id'   FROM bargylus_db.orders_contain_wines
inner join wines on orders_contain_wines.wine_id = wines.id
inner join orders on  orders_contain_wines.order_id = orders.id
INNER JOIN states ON orders.states_id = states.id
inner join users on  orders.user_id = users.id WHERE orders.id =:id";
        $statment = $dbh->prepare($query);
        $statment->execute(['id' => $id]);//prepare query
        $queryResult = $statment->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
        if ($debug) var_dump($queryResult);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getOrdersByUserId($id)
{
    require "model/.constant.php";
    $dbh = getPDO();
    try {

        $query = "select users.id, users.firstname, users.lastname,wines.winename, users.email, orders_contain_wines.quantity, 
                    orders_contain_wines.price as 'price_wine',  orders.date_purchase, 
                    orders.number, orders.states_id, orders.total_price, orders.id AS 'id_order', states.name AS 'state_name', 
                    states.id AS 'state_id', wines.photo,wines.id as 'wine_id'   FROM bargylus_db.orders_contain_wines
inner join wines on orders_contain_wines.wine_id = wines.id
inner join orders on  orders_contain_wines.order_id = orders.id
INNER JOIN states ON orders.states_id = states.id
inner join users on  orders.user_id = users.id WHERE users.id =:id";
        $statment = $dbh->prepare($query);
        $statment->execute(['id' => $id]);//prepare query
        $queryResult = $statment->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
        if ($debug) var_dump($queryResult);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getOrders()
{
    require "model/.constant.php";
    $dbh = getPDO();
    try {

        $query = 'select users.id, users.firstname, users.lastname,wines.winename, users.email, orders_contain_wines.quantity, 
                    orders_contain_wines.price as \'price_wine\', orders.date_purchase, 
                    orders.number, orders.states_id, orders.total_price, orders.id AS \'id_order\', states.name AS "state_name", states.id AS "state_id"   FROM bargylus_db.orders_contain_wines
inner join wines on orders_contain_wines.wine_id = wines.id
inner join orders on  orders_contain_wines.order_id = orders.id
INNER JOIN states ON orders.states_id = states.id
inner join users on  orders.user_id = users.id WHERE users.lastname LIKE \'%\' ORDER BY orders.number';
        $statment = $dbh->prepare($query);
        $statment->execute();//prepare query
        $queryResult = $statment->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
        if ($debug) var_dump($queryResult);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getStates()
{
    require "model/.constant.php";
    $dbh = getPDO();
    try {

        $query = 'select states.id, states.name AS "state_name"  FROM states';
        $statment = $dbh->prepare($query);
        $statment->execute();//prepare query
        $queryResult = $statment->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
        if ($debug) var_dump($queryResult);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function updateStateOrderById($id, $state)
{
    try {
        $dbh = getPDO();
        $query = 'UPDATE orders set orders.states_id =:state WHERE orders.id =:id';
        $statment = $dbh->prepare($query);
        $statment->execute(['id' => $id, 'state' => $state]);//prepare query
        $queryResult = $statment->fetch(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getGrapesOrder($id)
{

    require "model/.constant.php";
    try {
        $dbh = getPDO();
        $query = 'SELECT grapes.name as "grapes_name",grapes.color FROM wines            
                        INNER JOIN wines_compose_grapes on  wines.id = wines_compose_grapes.wine_id  
                        INNER JOIN grapes on  wines_compose_grapes.grape_id =grapes.id
                        WHERE wines.id =:id';
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

function getLastDeliveryByUserId($id)
{

    require "model/.constant.php";
    try {
        $dbh = getPDO();
        $query = 'select deliveries.firstname, deliveries.lastname, deliveries.street, deliveries.zip, deliveries.city, max(orders.id) as "last_order" , deliveries.id as "delivery_id" from orders
inner join deliveries on orders.delivery_id = deliveries.id
inner join users on orders.user_id = users.id
where users.id = :id';
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

function getDeliveriesByUserId($id)
{
    require "model/.constant.php";
    try {
        $dbh = getPDO();
        $query = 'select deliveries.firstname, deliveries.lastname, deliveries.street, deliveries.zip, deliveries.city, deliveries.id as "delivery_id" from deliveries
inner join users on deliveries.user_id = users.id
where users.id = :id';
        $statment = $dbh->prepare($query);
        $statment->execute(['id' => $id]);//prepare query
        $queryResult = $statment->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
        if ($debug) var_dump($queryResult);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }

}

function getDeliveryById($id)
{

    require "model/.constant.php";
    try {
        $dbh = getPDO();
        $query = 'select deliveries.firstname, deliveries.lastname, deliveries.street, deliveries.zip, deliveries.city, deliveries.id as "delivery_id" from deliveries

where deliveries.id = :id';
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
function updateDeliveryModel($delivery)
{
    try {
        $dbh = getPDO();
        $query = 'UPDATE deliveries 
set 
firstname =:firstname, 
lastname =:lastname, 
street =:street, 
zip =:zip, 
city =:city 
WHERE deliveries.id =:id';
        $statment = $dbh->prepare($query);
        $statment->execute($delivery);//prepare query
        $queryResult = $statment->fetch(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
        if ($debug) var_dump($queryResult);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }

}
function addDeliveryModel($delivery)
{
    require "model/.constant.php";
    $dbh = getPDO();
    try {
        $query = "INSERT INTO deliveries(firstname,lastname,street,zip,city,user_id) 
                  VALUES  (:firstname,:lastname,:street,:zip,:city,:user_id)";
        $stmt = $dbh->prepare($query);
        $stmt->execute($delivery);

        $dbh->lastInsertId();
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!:" . $e->getMessage() . "<br/>";
        die();
    }
}