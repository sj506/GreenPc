<?php
include_once "db/db.php";


$i_board = $_GET['i_board'];
$sql = "SELECT * FROM board_1 WHERE i_board = $i_board ";

$conn = get_conn();
$result = mysqli_query($conn,$sql);
mysqli_close($conn);
if($row = mysqli_fetch_assoc($result))
{
    $title = $row['title'];
    $ctnt_1 = $row['ctnt'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글수정</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
<header>
    <a href="list.php"><h1>기록저장</h1></a>
</header>
<main> 
    <div id="button">
    <a href="detail.php?i_board=<?=$i_board?>"><button>글로 이동</button></a>
    </div>
    <form action="mod_proc.php" method="post">
    <input type="text" name="i_board" value="<?=$i_board?>"readlony>
    <div>
    <label>제목 
    <input type="text" name="title" placeholder="제목" value="<?=$title?>">
    </label></div>
    <div>
        <label>내용 <br>
        <textarea name="ctnt" cols="100" rows="25" placeholder="내용"><?=$ctnt_1?></textarea>
        </label>
    </div>
    <input type="submit" value="글등록">
    <input type="reset" value="초기화">
    </form>
    </main>
</body>
</html>