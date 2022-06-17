<?php
echo "Country : " , $_COOKIE['country'] , "<br>";

$_COOKIE['country'] = "UK";
echo "Country : " , $_COOKIE['country'] , "<br>";

// unset($_COOKIE['country']);
// setcookie("country"); 
//쿠키 없애기
echo "Country : " , $_COOKIE['country'] , "<br>";