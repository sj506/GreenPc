<?php

if (!isset($_SESSION)) {
    session_start();
}

function flash($name = '', $val = '')
{
    if (!empty($name)) {
        // $name 값이 있으면
        if (!empty($val)) {
            // $val 값이 있으면
            $_SESSION[$name] = $val;
            // $_SESSION[$name]에 $val의 값을 넣어주고
        } elseif (empty($val) && !empty($_SESSION[$name])) {
            // $val 값이 없고 , $_SESSION[$name]에 값이 있으면
            unset($_SESSION[$name]);
            // $_SESSION[$name] 값을 없앤다.
        }
    }
}
