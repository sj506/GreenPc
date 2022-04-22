<?php

$week = array("일","월","화","수","목","금","토");

$weekend = array($week[6], $week[0]);

print $weekend[0] . "," . $weekend[1];

print "<br>";


$week[3] = "Wed";
print $week[3] . "<br>";
?>