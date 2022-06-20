<?php

//while.php

//for, while 둘 다 반복문.
//for는 몇번(숫자) 반복해야 되는지 알 때,
//while 언제 그만둬야 하는지 알 때, while 사용

/*
    rand(1,10)을 실행을 시킬건데 10이 나올 때까지 반복한다.
*/




while(true)
{
    $r_val = rand(1,10);
    if($r_val == 10) {break;}
    print "r_val : $r_val <br>";
}




?>