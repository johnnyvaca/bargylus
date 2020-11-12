<?php


class Dbh
{
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = 'Pa$$w0rd';
    private $db = 'tuto';

    protected function connect(){

        $dsn = 'mysql:host='.$this->host.';dbname='.$this->db.';charset=utf8';
        $pdo = new PDO($dsn, $this->user, $this->pwd);
         $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo;
    }
}