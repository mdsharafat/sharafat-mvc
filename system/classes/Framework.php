<?php

class Framework
{
    public function view($view_name, $data = [])
    {
        if(file_exists("../application/views/" . $view_name .".php")){
            require_once "../application/views/" . $view_name . ".php";
        }else{
            echo '<h1 style="color: red; text-align: center; margin-top: 10px;">ERROR! '.$view_name.' view not found.</h1>';
        }
    }

    public function model($model_name)
    {
        if(file_exists("../application/models/" . $model_name . ".php")){
            require_once "../application/models/" . $model_name . ".php";
            return new $model_name;
        }else{
            echo '<h1 style="color: red; text-align: center; margin-top: 10px;">ERROR! '.$model_name.' model not found.</h1>';
        }
    }

}


?>