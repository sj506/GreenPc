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


if(isset($_POST['i_board']))
{   
    $param += ['i_board' => $_POST['i_board']];
    $result = upd_board($param);
}
else
{
    $result = insert_board($param);
}
header("Location: list.php");


