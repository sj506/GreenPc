<div>
    <h1>수정</h1>
    <form action="modProc" method="post">
        <div>
            <input type="hidden" name="i_board" value="<?= $this->data
                ->i_board ?>">
        </div>
        <div>
            제목 : <input type="text" name="title" value="<?= $this->data
                ->title ?>">
        </div>
        <div>
            내용 : <textarea name="ctnt" cols="30" rows="10"><?= $this->data
                ->ctnt ?></textarea>
        </div>
        <input type="submit" value="수정">
    </form>
</div>