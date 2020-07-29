<?php
/**
 * Route - All kind of route will be declared amd maintained here.
 *
 * PHP version 7.4.5
 *
 * @package    Simple MVC Framework
 * @author     Md. Sharafat Hossain <sharafat.sohan047@gmail.com>
 * @version    1.0.1
 */

 class Route
 {
    /**
     * Default controller,
     * Default method,
     * Default parameter
     */
    public $controller = "WelcomeController";
    public $method     = "index";
    public $params      = [];

    public function __construct()
    {
        $url = $this->url();
        if(!empty($url)){
            if(file_exists("../application/controllers/".$url[0].".php")){
                $this->controller = $url[0];
                unset($url[0]);
            }else {
                echo '<h1 style="color: red; text-align: center; margin-top: 10px;">ERROR! '.$url[0].'.php not found.</h1>';
            }
        }

        require_once "../application/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        if(isset($url[1]) && !empty($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }else {
                echo '<h1 style="color: red; text-align: center; margin-top: 10px;">ERROR! '.$url[1].' method not found.</h1>';
            }
        }

        if(isset($url)){
            $this->params = $url;
        }else {
            $this->params = [];
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function url()
    {
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = rtrim($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
 }


?>