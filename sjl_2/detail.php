<?php

include_once "db/db_board.php";

$param = [
    'i_board' => $_GET['i_board']
];

$item = sel_board($param);
$next_board = sel_next_board($param);
$prev_board = sel_prev_board($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$item['title']?></title>
    <link rel="stylesheet" href="detail.css">
</head>
<body>
<header>
    <a href="list.php"><h1>기록저장</h1></a>
</header>
<main> 
    <div id="button">
    <a href="list.php"><button>리스트</button></a>
    <?php session_start();
    if(isset($_SESSION['login_user']))
    { ?> 
    <a href="del_proc.php?i_board=<?=$item['i_board']?>"><button>삭제</button></a>
    <a href="write.php?i_board=<?=$item['i_board']?>"><button>수정</button></a>
    <?php } ?>
    </div>
    <div id="print">
    <div id='title'> <?=$item['title']?>  /  작성자 : <?=$item['nm']?></div> 
    <div id='ctnt'> <?=$item['ctnt']?> </div>
    </div>
<main>
    <div class = "page_move">
        <?php if($prev_board !== 0) { ?>
            <a href="detail.php?i_board=<?=$prev_board?>"><button>이전글</button></a>
        <?php } ?>

        <?php if($next_board !== 0) { ?>
            <a href="detail.php?i_board=<?=$next_board?>"><button>다음글</button></a>
        <?php } ?>
    </div>
</body>
</html>