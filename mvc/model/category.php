<?php
/*
class Category
{
    private function getPDO()
    {

        $pdo = new PDO('mysql:host=localhost;dbname=tuto;charset=utf8', "root", "root");
        return $pdo;
    }
    private $id;

    public function getId() {
       return $this->id;
    }
    public function setId($value) {
        $this->id = $value;
    }

    public function read($fields = null)
    {
        if(!$fields){
            $fields = "*";
        }
        try {
            $pdo = self::getPDO();
            $query = "SELECT $fields FROM categories WHERE id=".self::getId();
            $statment = $pdo->prepare($query);//prepare query, il doit faire des vérifications et il va pas exécuter tant
            //qu'il y a des choses incorrects
            $statment->execute();//execute query
            $queryResult = $statment->fetchAll(PDO::FETCH_ASSOC);//prepare result for client cherche tous les résultats

            $dbh = null; //refermer une connection quand on a fini
            if ($debug) var_dump($queryResult);
            foreach ($queryResult as $i => $value){
                $this->$i = $value;
            }
            return $queryResult;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return null;
        }

    }
}

?>