<?php
/**
 *Created by bargylus.
 *FILE_NAME:DisplaywienModel.php
 *USER:marwa
 *DATE:21.09.2020
 */


/***
 * @return array|null
 */
// montrer les articles de vin
function getWines()
{
    require "model/.constant.php";
    $dbh = getPDO();
    try {

        $query = 'SELECT wines.id,wines.year,wines.winename,wines.alcohol,wines.basic_price,
                    wines.size,wines.stock,wines.discounts_id,grapes.name,grapes.color,
                        discounts.percentage,discounts.start_date,discounts.end_date, wines.photo, wines.visibility FROM wines            
                        INNER JOIN wines_compose_grapes on  wines.id = wines_compose_grapes.wine_id
                        INNER JOIN grapes on  wines_compose_grapes.grape_id =grapes.id
                        INNER JOIN discounts ON wines.discounts_id = discounts.id
                        where wines.winename like "%" and wines.visibility = 1 order by winename Asc';
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

/***
 * @param $id
 * @return mixed|null
 */

// show one wine or item
function getWine($id)
{

    require "model/.constant.php";
    try {
        $dbh = getPDO();
        $query = 'SELECT wines.id,wines.year,wines.winename,wines.alcohol,wines.basic_price,wines.size,
                    wines.size,wines.stock,wines.discounts_id,grapes.name,grapes.color,
                        discounts.percentage,discounts.start_date,discounts.end_date, wines.photo FROM wines            
                        INNER JOIN wines_compose_grapes on  wines.id = wines_compose_grapes.wine_id  
                        INNER JOIN grapes on  wines_compose_grapes.grape_id =grapes.id
                         INNER JOIN discounts ON wines.discounts_id = discounts.id WHERE wines.id =:id';
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


/***
 * @return array|null
 */

function getGrapes()
{
    require "model/.constant.php";
    $dbh = getPDO();
    try {

        $query = 'SELECT * FROM grapes where grapes.name like "%" order by grapes.name';
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


/***
 * @param $wine
 * @return false|string
 */

function addNewWineToDisplay($wine)
{
    require "model/.constant.php";
    try {
        $dbh = getPDO();
        $query = "INSERT INTO wines (wines.year,winename, alcohol,basic_price,wines.size,stock,photo,discounts_id) 
                    VALUES (:wyear, :wname, :walcohol, :wprice, :wsize,:wstock,:wphoto,:wdiscounts_id)";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute($wine);//execute query
        $id = $dbh->lastInsertId(); // put the id generated by the database into the array
        $dbh = null;
        return $id;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return false;
    }


}

/***
 * @param $wine
 * @param $grape
 * @return false
 */
function addgrapeToNewWine($wine, $grape)
{
    require "model/.constant.php";
    try {
        $dbh = getPDO();
        $query = "INSERT INTO wines_compose_grapes (wine_id,grape_id) 
                    VALUES (:wwine_id, :wgrape_id)";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute(['wwine_id' => $wine, 'wgrape_id' => $grape]);//execute query
        $wines['id'] = $dbh->lastInsertId(); // put the id generated by the database into the array
        $dbh = null;
        return $wines;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return false;
    }


}

/***
 * @param $id
 * @return bool
 */

function deleteOneWine($id)
{
    try {
        $dbh = getPDO();
        $query = "UPDATE wines
                  SET visibility =0
                  WHERE id=:id; ";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute(['id' => $id]);//execute query
        $dbh = null;
        return true;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return false;
    }
}
function editOneWine($wine)
{
    try {
        $dbh = getPDO();
        $query = "UPDATE wines
                  SET 
                  wines.year =:wyear,
                  winename =:wwinename,
                  alcohol =:walcohol,
                  basic_price =:wprice,
                  wines.size =:wsize,
                  stock =:wstock,
                  photo =:photo,
                  discounts_id =:wdiscounts
                  
                  WHERE id=:id ";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute($wine);//execute query
        $dbh = null;
        return true;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return false;
    }
}
function editGrapesWines($wine,$grape)
{
    try {
        $dbh = getPDO();
        $query = "UPDATE wines_compose_grapes
                  SET 
                  wine_id =:wine,
                  grape_id =:grape
                  
                  WHERE id=:wine ";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute(['wine'=>$wine,'grape'=>$grape]);//execute query
        $dbh = null;
        return true;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return false;
    }
}