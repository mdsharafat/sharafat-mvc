<?php

class Member extends Database
{
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

    public function getRow($id)
    {
        $sql = "SELECT * FROM members WHERE id=?";
        if($this->query($sql, [$id])){
            if($this->rowCount() > 0){
                return $this->fetch();
            }
        }
    }

    public function update($data)
    {
        $sql = "UPDATE members SET name=?, email=?, age=?, city=? WHERE id=?";
        if($this->query($sql, $data)){
            return true;
        }else {
            return false;
        }
    }

    public function destroy($data)
    {
        $sql = "DELETE FROM members WHERE id=?";
        if($this->query($sql, [$data])){
            return true;
        }else {
            return false;
        }
    }

}

?>