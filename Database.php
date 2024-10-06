<?php

class Database
{
    public $connection;

    public function __construct() {

        $dsn = "mysql:host=localhost;dbname=cleaning;charset=utf8mb4";

        $this->connection = new PDO($dsn, 'root', 'abc123');
    }

    public function query($sql)
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        
        return $statement;
    }   
}
