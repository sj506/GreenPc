<div>
    <h1>수정</h1>
    <form action="modProc.php" method="post">
        <div>
            <input type="hidden" name="i_board" value="<?= $this->data->i_board ?>">
        </div>
        <div>
            제목 : <input type="text" name="title" value="<?= $this->data->title ?>">
        </div>
        <div>
            내용 : <input type="text" name="title" value="<?= $this->data->ctnt ?>">
        </div>
    </form>
</div>