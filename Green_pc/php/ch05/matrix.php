<?php
    $matrix = array(
        array(1,2,3,0),
        array(4,5,6,0),
        array(7,8,9,0),
    );

    print_r($matrix);
    print "<br>" . $matrix[1][1] . "<br>";
    $child1 = $matrix[1];
    print $child1[1]. "<br>";
    array_push ($child1, 10,20) ;
    print_R($child1);

    print "<br>". count($matrix);
    print "<br>". count($child1);

?>