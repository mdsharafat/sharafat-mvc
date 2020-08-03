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

    public function register($data)
    {
        $sql = "INSERT INTO users (name, email, password) VALUES (?,?,?)";
        if($this->query($sql, $data)){
            return true;
        }else {
            return false;
        }
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = ? ";
        if($this->query($sql, [$email])){
            if($this->rowCount() > 0){
                $row         = $this->fetch();
                if(password_verify($password, $row->password)){
                    return ['status_code' => 'ok', 'data' => $row->id];
                }else {
                    return ['status_code' => 'password_not_match'];
                }
            }else {
                return ['status_code' => 'email_not_found'];
            }
        }
    }
}

?>