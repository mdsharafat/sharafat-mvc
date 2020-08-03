<?php

class ProfileController extends Framework
{
    public function __construct()
    {
        $this->helper("Link");
    }

    public function index()
    {
        return $this->view("profile");
    }

}


?>