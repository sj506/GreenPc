<?php
include_once "db.php";

$sql = "
SELECT * FROM board_1 ORDER BY i_board DESC
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
    <title>리스트</title>
    <link rel="stylesheet" href="list.css">

</head>
<body>
<header>
    <a href="list.php"><h1>기록저장</h1></a>
</header>
<div class="sidebar">
<ul>
    <div>메뉴</div>
    <li><a href="list.php"><div>리스트</div></a></li>
    <li><a href="insert.php"><div>글쓰기</div></a></li>
</ul>
</div>
<div>
    <a href="insert.php"><button class="button">글입력</button></a>
    </div>
    <div class="ctnt">
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            $i_board = $row['i_board'];
            $title = $row['title'];
            $ctnt = $row['ctnt'];
            print "<div class='write'>";
        print "<span id='title'> <a href='detail.php?i_board=$i_board'>$title</a></span>";
        print "<br>";
        print "<span id='ctnt'><a href='detail.php?i_board=$i_board'>$ctnt</a> </span>";
        print "</div>";

        }
        ?>
        </div>

</body>
</html>