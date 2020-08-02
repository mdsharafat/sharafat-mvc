<?php

class User extends Database
{
    public function checkUniqueEmail($email)
    {
        if($this->query("SELECT email FROM users WHERE email = ?", [$email])){
            if($this->rowCount() > 0){
                return false;
            }else {
                return true;
            }
        }
    }

    public function createNewUser($data)
    {
        $sql = "INSERT INTO users (name, email, password) VALUES (?,?,?)";
        if($this->query($sql, $data)){
            return true;
        }else {
            return false;
        }
    }
}

?>