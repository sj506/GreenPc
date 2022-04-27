<?php

//while.php

//for, while 둘 다 반복문.
//for는 몇번(숫자) 반복해야 되는지 알 때,
//while 언제 그만둬야 하는지 알 때, while 사용

    $val = rand(1,100);
    print "val : $val <br>";

    $i = 0;
    $sum = 0;
    while ($i <= $val)
    {  
        $sum= $i + $sum;
        $i++;
    }
    print $sum;


?>