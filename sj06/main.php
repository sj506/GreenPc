<?php

include_once 'db/db_board.php';

$page = 1;
if (isset($_GET['page'])) {
    $page = intval($_GET['page']);
}

$row_count = 5;
$param = [
    'row_count' => $row_count,
    'start_idx' => ($page - 1) * $row_count,
];

$paging_count = sel_paging_count($param);

// $list = board_list($param);
// print_r($list);

$list = inf_board_list();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Main</title>
<link rel="stylesheet" href="Default Value.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>
<body>
    <header class = "header">
        <div><button>Sign</button></div>
        <div><button>Login</button></div>
    </header>
    <main>
        <div>
        <div class = "circle"></div>
        </div>
        <div class = "circleList swiper mySwiper">
            <?php foreach ($list as $item) { ?>
                <div class = "ctntCircle swiper-wrapper">
                    <div class = "swiper-slide">
                        <div class="hover">
                <div><?= $item['title'] ?></div>
                <div><?= $item['ctnt'] ?></div>
                </div>
                </div>
                </div>
                <?php } ?>
             <div class="swiper-pagination"></div>
        </div>
    </main>
    <!-- <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
      </div>
      <div class="swiper-pagination"></div>
    </div> -->
<script src="main.js"></script>

</html>




        <!-- //         <div class = "page">
        //    for ($i = 1; $i <= $paging_count; $i++) { 
        //         <span class = " $i == $page ? 'pageIcon' : '' ?>">
        //         <a href="main.php?page= $i ">
        //     <li></li></a>
        //         </span>
        // </div> -->