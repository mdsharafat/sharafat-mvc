<?php

class MemberController extends Framework
{
    public function __construct()
    {
        if(Session::get("user_id") == false){
            $this->redirect("LoginController");
        }
        $this->helper("Link");
        $this->member_model = $this->model("Member");
    }

    public function index()
    {
        $data = $this->member_model->all();
        $this->view("manage-member", $data);
    }

    public function create()
    {
        return $this->view("add-member");
    }

    public function store()
    {
        $user_data = [
            'name'        => $this->input("name"),
            'email'       => $this->input("email"),
            'age'         => $this->input("age"),
            'city'        => $this->input("city"),
            'name_error'  => '',
            'email_error' => ''
        ];

        if(empty($user_data['name'])){
            $user_data['name_error'] = 'Name is required';
        }

        if(empty($user_data['email'])){
            $user_data['email_error'] = 'Email is required';
        }else {
            if(!$this->member_model->checkUniqueEmail($user_data['email'])){
                $user_data['email_error'] = 'Sorry email already exists.';
            }
        }

        if(empty($user_data['name_error']) && empty($user_data['email_error'])){
            $data     = [$user_data['name'], $user_data['email'], $user_data['age'], $user_data['city']];
            if($this->member_model->store($data)){
                Session::setFlash('add_member_message', 'New member added successfully.');
                $this->redirect("MemberController/index");
            }
        }else {
            $this->view("add-member", $user_data);
        }
    }

}


?>