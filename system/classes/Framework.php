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

    public function input($input_name)
    {
        if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post"){
            return trim(strip_tags($_POST[$input_name]));
        }else if($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "get") {
            return trim(strip_tags($_GET[$input_name]));
        }
    }

    public function helper($helperName)
    {
        if(file_exists("../system/helpers/".$helperName.".php")){
            require_once "../system/helpers/".$helperName.".php";
        }else {
            echo '<h1 style="color: red; text-align: center; margin-top: 10px;">Helper function '.$helperName.' not found.</h1>';
        }
    }

}


?>