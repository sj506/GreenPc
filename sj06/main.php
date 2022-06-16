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

$list = board_list($param);
print_r($list);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
<link rel="stylesheet" href="Default Value.css">
</head>
<body>
    <header class = "header">
        <div><button>Sign</button></div>
        <div><button>Login</button></div>
    </header>
    <main>
        <i class="fa-regular fa-envelope fa-xl"></i>
        <div>
        <div class = "circle"></div>
        </div>
        <div class = circleList>
            <?php foreach ($list as $item) { ?>
                <div class = ctntCircle>
                <div><?= $item['title'] ?></div>
                <div><?= $item['ctnt'] ?></div>
                </div>
                <?php } ?>
        </div>
                <div class = "page">
            <?php for ($i = 1; $i <= $paging_count; $i++) { ?>
                <span class = "pageIcon">
                <a href="main.php?page=<?= $i ?>">*</a>
                </span>
                <?php } ?>
        </div>
    </main>
</body>
<script src="main.js"></script>
</html>