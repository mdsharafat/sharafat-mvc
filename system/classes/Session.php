<?php

/**
 * Session Class
 *
 */

 class Session
 {
    public static function init()
    {
        session_start();
    }

    public static function set($session_name, $session_value)
    {
        $_SESSION[$session_name] = $session_value;
    }

    public static function get($session_name)
    {
        if(isset($_SESSION[$session_name])){
            return $_SESSION[$session_name];
        }else {
            return false;
        }
    }

    public static function unset($session_name)
    {
        if(isset($session_name)){
            unset($_SESSION[$session_name]);
        }
    }

    public static function setFlash($session_name, $message)
    {
        if(isset($session_name) && isset($message)){
            $_SESSION[$session_name] = $message;
        }
    }

    public static function flash($session_name, $class_name)
    {
        if(isset($session_name) && isset($class_name)){
            echo '<div class="'. $class_name .'"><p>'. $_SESSION[$session_name] .'</p></div>';
            unset($_SESSION[$session_name]);
        }
    }

    public static function destroy()
    {
        session_destroy();
    }

 }



?>