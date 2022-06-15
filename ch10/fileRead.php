<?php
$filep = fopen('../lorem.txt', 'r');
// 파일 여는 태그

if (!$filep) {
    die('파일을 열 수 없습니다.');
}

print '파일을 열었습니다. <br>';

while ($line = fgets($filep, 50)) {
    //fgets (열 파일, n갯수만큼 가져옴)
    print $line . '<br>';
}

fclose($filep);
