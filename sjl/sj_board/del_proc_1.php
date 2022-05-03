<?php

include_once "db/db.php";

$i_board = $_GET['i_board'];
$num = $_GET['num'];

$sql = "
DELETE FROM comment_1 WHERE num = $num
";

$conn = get_conn(); 
mysqli_query($conn,$sql);
mysqli_close($conn);
header("Location: detail.php?i_board=${i_board}");
