<?php
include_once "db.php";
$sql = "
SELECT * FROM board_1
";

$conn = get_conn();
$result = mysqli_query($conn,$sql);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
    <a href="list.php"><h1>기록저장</h1></a>
</header>
<main>
<?php
while($row=mysqli_fetch_assoc($result))
{
    $i_board = $row['i_board'];
    $title = $row['title'];
    $ctnt = $row['ctnt'];
print "<div class='write'>";
print "<a href='detail.php?i_board=$i_board'> 
<div>$title</div></a> <a href='detail.php?i_board=$i_board'><span>$ctnt</span></a>";
print "</div>";
}
?>

<a href="insert.php">글쓰기</a>
</main>
</body>
</html>