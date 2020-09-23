<?php
/**
 *Created by bargylus.
 *FILE_NAME:DisplaywienModel.php
 *USER:marwa
 *DATE:21.09.2020
 */



// montrer les articles de vin
function getWines()
{
    require "model/.constant.php";
    $dbh = getPDO();
    try {

        $query = 'SELECT wines.id,wines.year,wines.winename,wines.alcohol,wines.basic_price,wines.size,
                    wines.size,wines.stock,wines.discounts_id,grapes.name,grapes.color,
                        discounts.percentage,discounts.start_date,discounts.end_date, wines.photo FROM wines            
                        INNER JOIN wines_compose_grapes on  wines.id = wines_compose_grapes.wine_id  
                        INNER JOIN grapes on  wines_compose_grapes.grape_id =grapes.id
                         INNER JOIN discounts ON wines.discounts_id = discounts.id;
                        ';
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