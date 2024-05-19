<?php

    session_name("cookie test");
    $cookie_name = "username";
    $cookie_value = "admin";
    $cookie_exp = time() + 60*60*24 * 30;
    setcookie($cookie_name, $cookie_value, $cookie_exp, "/");

    

    if(count($_COOKIE) == 0)
    {
        echo "No cookie available";
    } 
    else 
    {
        foreach($_COOKIE as $cookie_name => $cookie_value) 
        {
            echo "$cookie_name : $cookie_value"."<br>";
        }
    }
?>