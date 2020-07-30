<?php

class Database
{
    public $db_host     = DB_HOST;
    public $db_name     = DB_NAME;
    public $db_user     = DB_USER;
    public $db_password = DB_PASSWORD;

    public $connection, $result;

    public function __construct()
    {
        try {
            return $this->connection = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name, $this->db_user, $this->db_password);
        } catch (PDOException $e) {
            echo "Database Connection Error. ".$e->getMessage();
        }
    }

    public function query($sql, $params = [])
    {
        if(empty($params)) {
            $this->result = $this->connection->prepare($sql);
            return $this->result->execute();
        }else {
            $this->result = $this->connection->prepare($sql);
            return $this->result->execute($params);
        }
    }

    public function rowCount()
    {
        return $this->result->rowCount();
    }

    public function fetch()
    {
        return $this->result->fetch(PDO::FETCH_OBJ);
    }

    public function fetchAll()
    {
        return $this->result->fetchAll(PDO::FETCH_OBJ);
    }
}


?>