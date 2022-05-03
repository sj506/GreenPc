<?php

include_once "db/db_board.php";

session_start();
$login_user = $_SESSION['login_user'];
$i_user = $login_user['i_user'];

$param = [
    'i_user' => $i_user,
    'title' => $_POST['title'],
    'ctnt' => $_POST['ctnt']
];

if(empty($_GET))
{
$result = insert_board($param);
}
else
{
$result = upd_board($param);
}
header("Location: list.php");


