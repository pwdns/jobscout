<?php

    $cookie_name = "cookie";
    $cookie_value = "<script>alert(\"This is an injected javascript\")<script>";
    $cookie_exp = time() + 60*60*24 * 3;
    $secure = true;
    $httpOnly = true;

    //Sanitize cookie value
    $sanitized_cookie_value = filter_var($cookie_value, FILTER_SANITIZE_STRING);

    //Set cookie with sanitized value
    setcookie($cookie_name, $sanitized_cookie_valu, $cookie_exp, '/', "localhost", $secure, $httpOnly);

?>