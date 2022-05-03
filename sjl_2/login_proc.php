<?php

include_once "db/db_user.php";

$upw = $_POST['upw'];

$param = [
    'uid' => $_POST['uid'],
    'upw' => $upw
];


$result = login_user($param);

if(empty($result)) {
    echo "해당하는 아이디 없음";
    die;
}

if(isset($_SESSION['login_user']))
{
    header("Location: list.php");
    die;
}
 else {
    header("Location: login.php");
}