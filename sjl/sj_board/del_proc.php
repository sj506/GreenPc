<?php

include_once "db/db.php";


$i_board = $_GET['i_board'];

$sql = "
DELETE FROM board_1 WHERE i_board = $i_board
";

$conn = get_conn(); 
mysqli_query($conn,$sql);
mysqli_close($conn);
header("Location: list.php");