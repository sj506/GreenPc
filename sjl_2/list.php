<?php

include_once "db/db_board.php";

session_start();
$nm = "";
if(isset($_SESSION['login_user']))
{
    $login_user = $_SESSION['login_user'];
    $nm = $login_user['nm'];
}

$page =1;
if(isset($_GET['page']))
{
    $page = intval($_GET['page']);
}

$row_count = 5;
$param = [
    'row_count' => $row_count,
    'start_idx' => ($page - 1) * $row_count
];

$paging_count = sel_paging_count($param);
$list = sel_board_list($param);

//검색 버튼을 눌렀고, 검색어가 존재한다면

    //DB조회 전달 후 결과 list 를 받아온다

    $yy = date('Y'); 
    $mm = date('m');
    $dd = date('d');
    $date = $yy.'-'.$mm.'-'.$dd;

$param = [
    'date' => $date
];

if(isset($_POST['search_input_txt']) && $_POST['search_input_txt'] !== "")
{
 $param += [
    'search_select' => $_POST['search_select'],
    'search_input_txt' => $_POST['search_input_txt']
 ];   
$list = search_board($param);
}

$total_count = total_count_conn();
$today_count = today_count_conn($param);

if(!$today_count)
{
new_count($param);
}
else
{
$param += ['today_count' => $today_count];
plus_count($param);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
    <link rel="stylesheet" href="list.css">
</head>
<body>
<header>
    <?php echo '총 방문자 수 : ' . $total_count.'명 / 오늘 방문자 수 : ' . $today_count . '명 <br>';
    echo isset($_SESSION['login_user']) ? "${nm}님 환영합니다." : "" ; 
    ?>
    
    <a href="list.php"><h1>기록저장</h1></a>
</header>
<div class="sidebar">
<ul>
    <div>메뉴</div>
    <li><a href="list.php"><div>리스트</div></a></li>
    <li><a href="write.php"><div>글쓰기</div></a></li>
</ul>
</div>
<div>
    <a href="write.php"><button class="button">글입력</button></a>
    <a href="join.php"><button class="button">회원가입</button></a>
    <?php session_start();
    if(isset($_SESSION['login_user'])) { ?>
    <a href="logout.php"><button class="button">로그아웃</button></a>
    <a href="profile.php">
        <button class="button">프로필</button>
    <?php 
    $session_img = $_SESSION["login_user"] ["profile_img"];
    $profile_img = $session_img == null ? "basic.jpg" : $_SESSION["login_user"]["i_user"] . "/" . $session_img ?>
    <div class="circular__img circular__sige40">
        <img src="/sjl_2/img/profile/<?=$profile_img?>" alt="기본이미지" width="100">
    </div></a>
    <?php } else {?>
    <a href="login.php"><button class="button">로그인</button></a>
    <?php } ?>
    </div>
    <div>
        <?php foreach($list as $item) { ?>
            <div class="write">
        <div id="title"><a href="detail.php?i_board=<?=$item['i_board']?>"><?=$item["title"]?>
        <div class="circular__img circular__sige40">
        <?php $borad_profile = $item["profile_img"] == null ? "basic.jpg" : $item["i_user"] . "/" . $item["profile_img"] ?>    
        <img src="/sjl_2/img/profile/<?=$borad_profile?>" alt="프로필사진"></div>
        </div>
        <div class="writer"><?=$item['nm']?></div>
        <div><?=mb_substr( $item["ctnt"], 0, 300 )?></div></a>
        </div>
        <?php } ?>
        </div>
        <div class = "page"><
            <?php for($i=1; $i<=$paging_count; $i++) {?>
                <span class = "<?=$i===$page ? "pageSelected" : ""?>">
                <a href="list.php?page=<?=$i?>"><?=$i?></a>
                </span>
                <?php }?>>
        </div>
        <div>
                <form action="list.php" method="post">
                    <select name="search_select" id="">
                        <option value="search_title">제목</option>
                        <option value="search_ctnt">제목+내용</option>
                        <option value="search_writer">작성자</option>
                    </select>
                    <input type="text" name="search_input_txt">
                    <input type="submit" value="검색">
                </form>
        </div>

</body>
</html>