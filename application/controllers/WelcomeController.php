<?php

/**
 * Welcome Controller - This is the default controller
 *
 * PHP version 7.4.5
 *
 * @package    Simple MVC Framework
 * @author     Md. Sharafat Hossain <sharafat.sohan047@gmail.com>
 * @version    1.0.1
 */

class WelcomeController extends Framework
{
    public function __construct()
    {
        $this->helper("Link");
    }

    public function index()
    {
        $this->view("welcome");
    }

}


?>