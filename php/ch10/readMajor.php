<?php
$data = file('./major.txt');
// file 배열로 만들어줌

print_r($data);

foreach ($data as $idx => $line) {
    $space = strpos("$line", ' ');
    $name = substr($line, 0, 20);
    $major = substr($line, $space, 20);
    print "<br> Name : {$name} / Major : {$major}";

    print '<br>--------------------------<br>';

    $div = explode(' ', "$line");
    // explode('구분할 것','문자열') -> 구분할 것 기준으로 잘라서 배열로 만들어 줌
    print "<br> Name : {$div[0]} / Major : {$div[1]}";
}
