<?php

class RegisterController extends Framework
{
    public function __construct()
    {
        $this->helper("Link");
        $this->user_model = $this->model("User");
    }

    public function index()
    {
        return $this->view("signup");
    }

    public function create()
    {
        $user_data = [
            'name'                   => $this->input("name"),
            'email'                  => $this->input("email"),
            'password'               => $this->input("password"),
            'password_repeat'        => $this->input("password-repeat"),
            'name_error'             => '',
            'email_error'            => '',
            'password_error'         => '',
            'password_repeat_error'  => ''
        ];

        if(empty($user_data['name'])){
            $user_data['name_error'] = 'Name is required';
        }

        if(empty($user_data['email'])){
            $user_data['email_error'] = 'Email is required';
        }else {
            if(!$this->user_model->checkUniqueEmail($user_data['email'])){
                $user_data['email_error'] = 'Sorry email already exists.';
            }
        }

        if(empty($user_data['password'])){
            $user_data['password_error'] = 'Password is required';
        }elseif(strlen($user_data['password']) < 8){
            $user_data['password_error'] = 'Password must be 8 character long';
        }

        if($user_data['password'] != $user_data['password_repeat']){
            $user_data['password_repeat_error'] = 'Password not match';
        }

        if(empty($user_data['name_error']) && empty($user_data['email_error']) && empty($user_data['password_error']) && empty($user_data['password_repeat_error'])){
            $password = password_hash($user_data['password'], PASSWORD_DEFAULT);
            $data = [$user_data['name'], $user_data['email'], $password];
            if($this->user_model->createNewUser($data)){
                Session::setFlash('registration_message', 'Registration successfull.');
                return $this->view("login");
            }

        }else {
            $this->view("signup", $user_data);
        }
    }
}


?>