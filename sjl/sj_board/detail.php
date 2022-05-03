<?php

include_once "db/db.php";


$i_board = $_GET['i_board'];

$sql = "
SELECT * FROM board_1 WHERE i_board = $i_board
";

$sql_1 = "
SELECT * FROM comment_1 WHERE i_board = $i_board
";

$conn = get_conn();
$result = mysqli_query($conn,$sql);
$result_1 = mysqli_query($conn,$sql_1);
mysqli_close($conn);
if($row=mysqli_fetch_assoc($result))
{
    $i_board = $row['i_board'];
    $title = $row['title'];
    $ctnt = $row['ctnt'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="detail.css">

</head>
<body>
<header>
    <a href="list.php"><h1>기록저장</h1></a>
</header>
<main> 
    <div id="button">
    <a href="list.php"><button>리스트</button></a>
    <a href="del_proc.php?i_board=<?=$i_board?>"><button>삭제</button></a>
    <a href="mod.php?i_board=<?=$i_board?>"><button>수정</button></a>
    </div>
    <div id="print">
    <?php
        print "<div id='title'> $title </div>";
        print "<div id='ctnt'> $ctnt </div>";
    ?>
    </div>
<form action="comment_proc.php" method="post">
    <input type="hidden" name="i_board" value="<?=$i_board?>">
    <div><label>
        댓글 : <input type="text" name="comm"></label>
    <input type="submit" value="등록"></div>
    </form>

    <table>
        <div>
        <?php
        while($row = mysqli_fetch_assoc($result_1))
        {
            $i_board = $row['i_board'];
            $num = $row['num'];
            $com = $row['com'];
            print "<tr>";
            print "<td>$com <a href='del_proc_1.php?num=$num&i_board=$i_board'><button>댓글삭제</button></a></div>
            </td>";
            print "</tr>";
        }
        ?>
</table>
<main>
</body>
</html>