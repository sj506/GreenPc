<?php
session_start();

$_SESSION['g'] = "This is a Global variable";
?>

<a href="page4.php">Next page</a>

<!-- 세션은 브라우저마다 저장이 됨 다른 브라우저를 쓰면 다시 해줘야함 
$_SESSION 은 하나의 배열, 안에 g를 찾는 것-->