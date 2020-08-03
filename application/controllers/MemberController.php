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

    public function edit($id)
    {
        $user_data = [
            'id' => $id
        ];
        $row = $this->member_model->getRow($user_data['id']);
        $data = [
            'data' => $row,
            'name_error' => '',
            'email_error' => ''
        ];
        if($row != null){
            $this->view("edit-member", $data);
        }
    }

    public function update()
    {
         $user_data = [
            'id'          => $this->input("id"),
            'name'        => $this->input("name"),
            'email'       => $this->input("email"),
            'age'         => $this->input("age"),
            'city'        => $this->input("city"),
            'name_error'  => '',
            'email_error' => '',
            'data'        => ''
        ];

        $user_data['data'] = $this->member_model->getRow($user_data['id']);
        if(empty($user_data['name'])){
            $user_data['name_error'] = 'Name is required';
        }

        if(empty($user_data['email'])){
            $user_data['email_error'] = 'Email is required';
        }
        $update_data = [
            $user_data['name'],
            $user_data['email'],
            $user_data['age'],
            $user_data['city'],
            $user_data['id'],
        ];
        if(empty($user_data['name_error']) && empty($user_data['email_error'])){
            $data     = [$user_data['name'], $user_data['email'], $user_data['age'], $user_data['city']];
            if($this->member_model->update($update_data)){
                Session::setFlash('update_member_message', 'Member updated successfully.');
                $this->redirect("MemberController/index");
            }
        }else {
            $this->view("edit-member", $user_data);
        }

    }

    public function destroy()
    {
        $user_data = [
            'id' => $this->input("delete_id")
        ];
        // die($this->member_model->destroy($user_data));
        if($this->member_model->destroy($user_data['id'])){
            Session::setFlash('delete_member_message', 'Member Deleted successfully.');
        }else{
            Session::setFlash('delete_member_message', 'Something went wrong.');
        }
        $this->redirect("MemberController/index");

    }

}


?>