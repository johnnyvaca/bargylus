<?php

require "model/Dbh.php";
class Test extends Dbh
{
    /*
    public function getUsers(){
        $sql = "SELECT * FROM categories";
        $stmt = $this->connect()->query($sql);
    }
    */
    public function read()
    {

        try {
            $pdo = $this->connect();
            $query = "SELECT * FROM categories";
            $statment = $pdo->prepare($query);
            $statment->execute();//execute query
            $queryResult = $statment->fetchAll(PDO::FETCH_ASSOC);//prepare result for client cherche tous les résultats
            //$pdo = null; //refermer une connection quand on a fini
            if ($debug) var_dump($queryResult);
            return $queryResult;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return null;
        }

    }

}