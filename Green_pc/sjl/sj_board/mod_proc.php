<?php
include_once 'db.php';

$i_board = $_POST['i_board'];
$title = $_POST["title"];
$ctnt = $_POST["ctnt"];

$ctnt_1 = addslashes($ctnt);

$sql = "UPDATE board_1 SET 
title = '$title' , ctnt = '$ctnt_1' 
WHERE i_board = $i_board";

$conn = get_conn();
$result = mysqli_query($conn,$sql);
mysqli_close($conn);

header("Location: detail.php?i_board=${i_board}");

?>