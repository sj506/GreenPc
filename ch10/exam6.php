<?php
// exam6.txt 파일 읽어서 전부 대문자로 변경한 후
// exam6_capital.txt 에 저장해 주세요.

$filep = fopen('./exam6.txt', 'r');
// 파일 여는 태그

if (!$filep) {
    die('파일을 열 수 없습니다.');
}

$contents = file_get_contents('./exam6.txt');

$exam6 = fopen('./exam6_capital.txt', 'w');
$ctnt = strtoupper($contents);

print $ctnt;

fputs($exam6, "$ctnt");

fclose($exam6);
