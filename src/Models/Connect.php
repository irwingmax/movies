<?php
namespace Irwing\Movies\Models;

use PDO;

class Connect
{

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $connection;

    public function connectar()
    {
        $this->server =  "localhost:3306";
        $this->user   =  "root";
        $this->pwd    =  "irwing";
        $this->dbname =  "movies_db";

        try {
            $this->connection = new \PDO(
                "mysql:host=$this->server;
                dbname=$this->dbname",
                $this->user,
                $this->pwd
            );
            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        } catch (PDOException $e) {
            return "Não Conectado: " . $e->getMessage();
        }

        return $this->connection;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
