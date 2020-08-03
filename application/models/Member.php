<?php

class Member extends Database
{
    public function checkUniqueEmail($email)
    {
        if($this->query("SELECT email FROM members WHERE email = ?", [$email])){
            if($this->rowCount() > 0){
                return false;
            }else {
                return true;
            }
        }
    }

    public function store($data)
    {
        $sql = "INSERT INTO members (name, email, age, city) VALUES (?,?,?,?)";
        if($this->query($sql, $data)){
            return true;
        }else {
            return false;
        }
    }

    public function all()
    {
        $sql = "SELECT * FROM members";
        if($this->query($sql)){
            return $this->fetchAll();
        }else {
            return false;
        }
    }

}

?>