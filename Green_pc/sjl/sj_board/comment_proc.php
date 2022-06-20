<?php

include_once "db.php";

$i_board = $_POST['i_board'];
$com = $_POST['comm'];

$sql = "
INSERT INTO comment_1
(i_board,com)
value
($i_board,'$com')
";

$conn = get_conn(); 
mysqli_query($conn,$sql);
mysqli_close($conn);
header("Location: detail.php?i_board=${i_board}");
