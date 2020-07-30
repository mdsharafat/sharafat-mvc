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
    public function index()
    {
        $my_model = $this->model("User");
        if($my_model->myData()){
            echo "<pre>";
            print_r($my_model->myData());
            echo "</pre>";
        } else {
            echo "Unable to insert data";
        }
    }

}