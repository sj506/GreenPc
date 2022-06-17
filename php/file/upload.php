<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload_proc.php" method="POST" enctype="multipart/form-data">
        <!-- enctype = 인코딩 타입은 multipart/form-data -->
    
    <div><label>이미지 <input type="file" name = "img" accept="image/*"></label></div>0
        <!-- accept="image/*" 업로드 파일을 이미지파일로 선택 -->
    <div><input type="submit" value="업로드"></div>
    </form>
</body>
</html>