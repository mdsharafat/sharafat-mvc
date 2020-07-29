<?php
/**
 * Route - All kind of route will be declared amd maintained here.
 *
 *
 * PHP version 7.4.5
 *
 *
 * @package    Simple MVC Framework
 * @author     Md. Sharafat Hossain <sharafat.sohan047@gmail.com>
 * @copyright  2020 cybersoft
 * @version    1.0.1
 */

 class Route
 {
    public function __construct()
    {
        $url = $this->url();
        echo "<pre>";
        print_r($url);
        echo "</pre>";
    }

    public function url()
    {
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = rtrim($url); // remove extra spaces on right side
            $url = filter_var($url, FILTER_SANITIZE_URL); // remove special character
            $url = explode("/", $url);
            return $url;
        }
    }
 }


?>