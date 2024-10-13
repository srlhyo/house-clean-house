<?php

namespace Core;

use PDO;
use PDOException;

class Database
{
    public $connection;
    public $statement;

    public function __construct($config, $username='root', $password='') {
        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";   

        try {
            $this->connection = new PDO($dsn,$username, $password, options: [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch(PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            die();
        }
    }

    public function query($sql, $params = [])
    {
        $this->statement = $this->connection->prepare($sql);
        $this->statement->execute($params);
        
        return $this;
    }  
    
    public function find() {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();
        if(! $result) {
            abort();
        }

        return $result;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }
}
