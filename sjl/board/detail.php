<?php
    include_once 'db.php';

    $i_board = $_GET['i_board'];
    $sql = "SELECT * FROM t_board WHERE i_board = $i_board ";

    $conn = get_conn();
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
        $create_at = $row['create_at'];
    }
    // 어차피 한 줄 가져오는 거 알고 있으니 if를 쓰자
    // 경우의 수 0,1 두개있는데 0일 때를 알 수 있어서 좋음
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <a href="list.php"><button>리스트</button></a>
    <a href="del_proc.php?i_board=<?=$i_board?>"><button>삭제</button></a>
    <a href="mod.php?i_board=<?=$i_board?>"><button>수정</button> </a>
    <div>제목<?= $title ?></div>
    <div>작성일시<?= $create_at ?></div>
    <div>내용<?= $ctnt ?></div>
    
</body>
</html>
<!-- 
1) include_once 'db.php'; 를 어떨 때 써줘야 하는지
쿼리문 쓰려면 써야함 / 로그인한다는 느낌 / 계속 복붙하면 수정이 어려우니 축약해서 쓰는 거
include_once는 몇번을 써도 한번으로만 인식함 에러가 안 뜸 그냥 이거 쓰자 이게 더 좋대

2) $conn = get_conn();
list.php 에서 mysqli_close($conn);를 while 값 후에 닫는 이유에 대해서

3) $result = mysqli_query($conn,$sql);
한번 더 설명 부탁드립니다 ㅠㅠ

select가 아닐 땐 0,1 트루 앤 펄스
select 에는 결과 값이 담김

주소값 이동 화면에 뿌린다
 -->
