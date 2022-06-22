<div>
    <h1>글쓰기</h1>
    <form action="writeProc" method="post">
        <div>
            <input type="hidden" name="i_board">
        </div>
        <div>
            제목 : <input type="text" name="title">
        </div>
        <div>
            내용 : <textarea name="ctnt" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="글 입력">
    </form>
</div>