<?php
session_start();

if(empty($_SESSION['login_user']))
{ ?>
<script> 
alert("잘못된 접근입니다.")
location.href = "list.php"
</script>
<?php
} 
$title = "";
$ctnt = "";
if(isset($_GET['i_board'] ))
{
include_once "db/db_board.php";
$i_board = $_GET['i_board'];
$param = [
    'i_board' => $i_board
];
$item = sel_board($param);
$title = $item['title'];
$ctnt = $item['ctnt'];
$login_user = $_SESSION['login_user'];
$i_user = $login_user['i_user'];

if($item['i_user'] !== $i_user)
{ ?>
<script> 
alert("작성자가 아니면 글을 수정할 수 없습니다.")
location.href = "detail.php?i_board=<?=$i_board?>"
</script>
<?php
}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>글입력</title>
    <link rel="stylesheet" href="write.css">
</head>
<body>
<header>
    <a href="list.php"><h1>기록저장</h1></a>
</header>
<main>
<div id="button">
    <a href="list.php"><button>리스트</button></a>
    </div>
    <form action="write_proc.php" method="post">
    <div>
    <label>제목 
    <input type="text" name="title" placeholder="제목" value="<?=$title?>"></label></div>
    <div>
        <label>내용 <br>
        <textarea name="ctnt" cols="100" rows="25" placeholder="내용"><?=$ctnt?></textarea>
        </label>
    </div>
    <input id="submit" type="submit" value="작성 완료">
    </form>
</main>
</body>
</html>