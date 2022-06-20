<?php
include_once "db.php";
$conn = get_conn();
$sql = "SELECT i_board, title, ctnt ,create_at, mod_at FROM t_board ORDER BY i_board DESC";
// 내가 넣고 싶은 쿼리문을 넣는다
$result = mysqli_query($conn, $sql);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>글쓰기</h1>
    <a href="write.php"><button>글쓰기</button></a>
    <h1>리스트</h1>
    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>내용</th>
            <th>작성일시</th>
            <th>수정시간</th>
            <a href=""></a>
        </tr>
        <?php
        while($row = mysqli_fetch_assoc($result))
        {
            $i_board = $row['i_board'];
            $title = $row['title'];
            $ctnt = $row['ctnt'];
            $create_at = $row['create_at'];
            $mod_at = $row['mod_at'];
            print "<tr>";
            print "<td>${i_board}</td>";
            print "<td><a href='detail.php?i_board=${i_board}'>${title}</a></td>";
            print "<td>${ctnt}</td>";
            print "<td>${create_at}</td>";
            print "<td>${mod_at}</td>";
            print "</tr>";
        }
        ?>
    </table>
</body>
</html>
<!-- 
클릭하거나 주소창에 직접 치는 것 = 겟 방식
검색하는 것 = 포스트방식
쿼리스트링 
파라미터 
-->
