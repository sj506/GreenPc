<?php
$data = file('./name.txt');
// file 배열로 만들어줌

print_r($data);

foreach ($data as $idx => $name) {
    print "<br> {$idx} : {$name}";
}
