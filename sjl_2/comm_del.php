<?php

include_once "db/db_board.php";

session_start();
$i_comm = $_GET['i_comm'];
$i_board = $_GET['i_board'];

if(empty($_SESSION['login_user'])){?>
<script>
    alert("잘못된 접근입니다.")
    location.href = "detail.php?i_board=<?=$i_board?>"
</script>
<?php
}

$login_user = $_SESSION['login_user'];
$uid = $login_user['uid'];

$param = [
    'i_comm' => $i_comm
];

$result = comm_sel($param);
$item = mysqli_fetch_assoc($result);

if($uid !== $item['uid'])
{ ?>
<script>
    alert("작성자만 댓글을 지울 수 있습니다.")
    location.href = "detail.php?i_board=<?=$i_board?>"
</script>
<?php
die;}
$result = comm_del($param);
header("Location: detail.php?i_board=$i_board");