<?php

/**
 * Welcome Controller - This is the default controller
 *
 *
 * PHP version 7.4.5
 *
 *
 * @package    Simple MVC Framework
 * @author     Md. Sharafat Hossain <sharafat.sohan047@gmail.com>
 * @version    1.0.1
 */


class WelcomeController
{
    public function index()
    {
        echo "Welcome To Simple MVC";
    }

    public function addNumber($num_1, $num_2)
    {
        echo $num_1 + $num_2;
    }

}


?>