<?php

/**
 * User Controller
 *
 *
 * PHP version 7.4.5
 *
 *
 * @package    Simple MVC Framework
 * @author     Md. Sharafat Hossain <sharafat.sohan047@gmail.com>
 * @version    1.0.1
 */

class UserController extends Framework
{
    public function __construct()
    {
        $this->helper("Link");
    }

    public function index()
    {
        return $this->view("user_view");
    }

    public function create()
    {
        $name  = $this->input('name');
        $age   = $this->input('age');
        $email = $this->input('email');
        $model = $this->model("User");
        if($model->createNewUser($name, $age, $email)){
            echo "User Data Inserted Successfully";
        }else {
            echo "Sorry!!! Something Went Wrong";
        }
    }

}