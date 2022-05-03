<?php

include_once "db.php";

$title = $_POST['title'];
$ctnt = $_POST['ctnt'];

$ctnt_1 = addslashes($ctnt);

$sql= "
INSERT INTO board_1
(title,ctnt)
value
('$title','$ctnt_1')
";

$conn=get_conn();
mysqli_query($conn,$sql);
mysqli_close($conn);
header("Location: list.php");