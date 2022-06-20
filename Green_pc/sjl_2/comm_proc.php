<?php

include_once "db/db_board.php";


$i_board = $_POST['i_board'];
$param = [
    'uid' => $_POST['uid'],
    'comm' => $_POST['comm']
];


comm_ins($param);

header("Location: detail.php?i_board=$i_board");