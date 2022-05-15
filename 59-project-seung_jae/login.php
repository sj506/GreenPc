<!-- 오구프로젝트 
시작일시 : 2022.05.13일
버전 : 오구 1.0v
로그인 페이지
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/8eb4f0837a.js" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="css/styles.css">
    <style>

</style>

</head>

<body>
    <!-- 전체사이즈 -->
    <div class="container">
        <!-- header 인클루드해서 사용 -->
        <header>
            <?php
            $page_name = "로그인";
            include_once "header.php";
            ?>
        </header>
        <!-- main -->
        <main>
            <div>
        <a href="">
            <div id = logo></div>
        </a>   
        </div> 
        <div id="intro">
        로그인하고 다양한 혜택을 받아보세요!
        </div>
        <a href="">
        <div id="kakao_login"> 
            <div>카카오로 로그인</div>
        </div>
        </a>
        <a href="">
        <div id="naver_login"> 
             <div>네이버로 로그인</div>
        </div>
        </a>
        <a href="">
        <div id="email_login"> 
             <div>이메일로 로그인</div>
        </div>
        </a>
        <a href="">
        <div id="email_join">
            <div>이메일로 회원가입</div>
        </div>
        </a>
        </main>
        <!-- footer 인클루드해서 사용 -->
        <footer>
            <?php
            include_once "footer.html";
            ?>
        </footer>
    </div>
</body>
</html>

