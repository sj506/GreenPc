<?php

include_once "db/db_board.php";

session_start();
$i_board = $_GET['i_board'];

if(empty($_SESSION['login_user'])){?>
<script>
    alert("잘못된 접근입니다.")
    location.href = "detail.php?i_board=<?=$i_board?>"
</script>
<?php
}

$login_user = $_SESSION['login_user'];
$i_user = $login_user['i_user'];

$param = [
    'i_board' => $i_board,
    'i_user' => $i_user
];

$item = sel_board($param);

if($i_user !== $item['i_user'])
{ ?>
<script>
    alert("작성자만 글을 지울 수 있습니다.")
    location.href = "detail.php?i_board=<?=$i_board?>"
</script>
<?php
die;}
$result = del_board($param);
header("Location: list.php");