<?php
session_start();
include_once "db/db_board.php";
if(isset($_SESSION["login_user"]))
{
    $login_user = $_SESSION["login_user"];
    $i_user = $login_user["i_user"];
    
}
    $param = [
    "i_board" => $_GET['i_board']
];
$item = sel_board($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>제목</title>
</head>
<body>
    <div>
        <a href="list.php">리스트</a>
    </div>
    <div>
    <?php if(isset($_SESSION["login_user"]) && $i_user === $item['i_user']) { ?>
                    <a href="mod.php?i_board=<?=$item['i_board']?>"><button>수정</button></a>
                    <button onclick="isDel();">삭제</button>
                <?php } else { ?>
                        
                <?php } ?>      </div>          
    <div>제목 : <?=$item["title"]?> </div>
    <div>글쓴이 : <?=$item["nm"]?> </div>
    <div>내용 : <?=$item["ctnt"]?> </div>
    <div>등록일시 : <?=$item["created_at"]?> </div>
    <script>
        function isDel(){
                console.log('isDel 실행 됨!!');
                const result = confirm('삭제하시겠습니다');
                if(result){
                    console.log('삭제할게요.');
                }
                else{
                    console.log('취소할게요.')
                }
        }
    </script>
</body>
</html>