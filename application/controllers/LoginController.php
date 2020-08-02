<?php

class LoginController extends Framework
{
    public function __construct()
    {
        $this->helper("Link");
    }

    public function index()
    {
        return $this->view("login");
    }
}


?>