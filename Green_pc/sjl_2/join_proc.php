<?php

include_once "db/db_user.php";

$param = [
'uid' => $_POST['uid'],
'upw' => $_POST['upw'],
'nm' => $_POST['nm']
];

$result = ins_user($param);

header("Location: list.php");