<?php

namespace Mysql;

class Database
{
    private $connection;
    public function __construct()
    {
        $this->connectDatabase();
    }
    public function connectDatabase()
    {
        try {
            $this->connection = new \PDO('mysql:host=db;dbname=idk', 'root', 'root');
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $this->connection;
        } catch (\PDOException $th) {
            throw $th;
        }
    }
}
