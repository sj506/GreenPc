<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>프로필 이미지 디스플레이</div>
    <form action="profile_proc.php" method="POST" enctype="multipart/form-data">
    <div><label>이미지 : <input type="file" name="img" accept="image/*"></label></div>
    <div><input type="submit" value="입력"></div>
    </form>
</body>
</html>