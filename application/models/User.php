<?php

class User extends Database
{
    public function createNewUser($name = null, $age = null, $email = null)
    {
        $sql = "INSERT INTO users (name, age, email) VALUES (?,?,?)";
        if($this->query($sql, [$name, $age, $email])){
            return true;
        }else {
            return false;
        }
    }
}

?>