<?php

class LoginController extends Framework
{
    public function __construct()
    {
        $this->helper("Link");
        $this->user_model = $this->model("User");
    }

    public function index()
    {
        return $this->view("login");
    }

    public function login()
    {
        $user_data = [
            'email' => $this->input('email'),
            'password' => $this->input('password'),
            'email_error' => '',
            'password_error' => ''
        ];

        if(empty($user_data['email'])){
            $user_data['email_error'] = 'Email is required';
        }

        if(empty($user_data['password'])){
            $user_data['password_error'] = 'Password is required';
        }

        if(empty($user_data['email_error']) && empty($user_data['password_error'])){
            $result = $this->user_model->login($user_data['email'], $user_data['password']);
            if($result['status_code'] === 'email_not_found'){
                $user_data['email_error'] = 'Sorry!!! invalid email';
                $this->view("login", $user_data);
            }elseif ($result['status_code'] === 'password_not_match') {
                $user_data['password_error'] = 'Credential not match';
                $this->view("login", $user_data);
            }elseif ($result['status_code'] === 'ok') {
                Session::set('user_id', $result['data']);
                $this->redirect("ProfileController");
            }
        }else {
            return $this->view("login", $user_data);
        }
    }

    public function logout()
    {
        Session::destroy();
        $this->redirect("LoginController");
    }
}


?>