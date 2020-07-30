<?php

class User extends Database
{
    public function myData()
    {
        $name  = "Sohan";
        $age   = 30;
        $email = "sohan@test.com";

        $sql = "SELECT * FROM users";
        if($this->query($sql)){
            return $this->fetchAll();
        }else {
            return false;
        }
    }
}

?>