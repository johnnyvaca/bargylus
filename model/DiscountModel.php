<?php
/**
 *Created by bargylus.
 *FILE_NAME:DiscountModel.php
 *USER:marwa
 *DATE:21.09.2020
 */





/***
 * @return array|null
 *
 */
function getSolds()
{
    // pour l'affichage debuge
    require "model/.constant.php";
    try {
        $dbh = getPDO();
        $query = 'SELECT wines.id,wines.year,wines.winename,wines.alcohol,wines.basic_price,
                    wines.size,wines.stock,wines.discounts_id,
                        discounts.percentage,discounts.start_date,discounts.end_date, wines.photo FROM wines INNER JOIN discounts on  wines.discounts_id = discounts.id';
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
function getDiscounts()
{
    // pour l'affichage debuge
    require "model/.constant.php";
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM discounts where id like "%%" order by discounts.id';
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