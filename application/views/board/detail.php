<!DOCTYPE html>
<html lang="en">
<head>
<?php
include_once 'application/views/template/head.php';

$i_board = $_GET['i_board'];
?>

</head>
<body>
    <h1>디테일</h1>
            <div data-i_board="<?= $i_board ?>">
                <div>번호 : <?= $this->data->i_board ?></div>
                <div>제목 : <?= $this->data->title ?></div>
                <div>내용 : <?= $this->data->ctnt ?></div>
                <div>글쓴이 : <?= $this->data->nm ?></div>
                <div>작성일 : <?= $this->data->created_at ?></div>
            </div>
            <div>
            <a href="mod?i_board=<?= $i_board ?>"><button>수정</button></a>
            <button id="btnDel" data-i_board="<?= $i_board ?>" >삭제</button>
        </div>
</body>
</html>