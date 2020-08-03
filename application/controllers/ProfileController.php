<?php

class ProfileController extends Framework
{
    public function __construct()
    {
        if(Session::get("user_id") == false){
            $this->redirect("LoginController");
        }
        $this->helper("Link");
    }

    public function index()
    {
        return $this->view("profile");
    }

}


?>