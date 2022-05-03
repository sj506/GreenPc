<?php

include_once "db.php";

function ins_user(&$param)
{
    $uid = $param['uid'];
    $upw = $param['upw'];
    $nm = $param['nm'];

    $sql = "INSERT INTO sj_user
    (uid, upw, nm)
    value
    ('$uid','$upw','$nm')
    ";
    $conn = get_conn();
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    return $result;
}

function login_user(&$param)
{
    $uid = $param['uid'];
    $upw = $param['upw'];

    $sql = "SELECT * FROM sj_user WHERE uid = '$uid'";
    $conn = get_conn();
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    if($row['upw'] === $upw)
    {
        session_start();
        $_SESSION['login_user'] = $row;
    }
    return $row;
}