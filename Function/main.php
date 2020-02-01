<?php
    function redirect($dir = "/")
    {
        header("location: $dir");
    }
    
    function delete_session($session_name)
    {
        $_SESSION[$session_name] = "";
        unset($_SESSION[$session_name]);
    }
    
    function dv($data)
    {
        die(print_r($data));
    }
    
    
    function ev($data)
    {
        echo var_dump($data) . "<hr/>";
    }
    