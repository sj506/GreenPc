<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>글입력</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
<header>
    <a href="list.php"><h1>기록저장</h1></a>
</header>
<main>
<div id="button">
    <a href="list.php"><button>리스트</button></a>
    </div>
    <form action="insert_proc.php" method="post">
    <div>
    <label>제목 
    <input type="text" name="title" placeholder="제목"></label></div>
    <div>
        <label>내용 <br>
        <textarea name="ctnt" cols="100" rows="25" placeholder="내용"></textarea>
        </label>
    </div>
    <input id="submit" type="submit" value="작성 완료">
    </form>
</main>
</body>
</html>