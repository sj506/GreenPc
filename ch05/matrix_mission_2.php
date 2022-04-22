<?php
    $scores = array(
            // 국   영  수
        array(100,100,100), //영수
        array(90,80,70),    //순자
        array(55,65,75),    //영철
        array(80,50,60),    //승재
    );


    $each_scores_1 = array(0,0,0);

    $names = array("영수","순자","영철","승재");


    for($i=0; $i<count($scores); $i++)
    {
        for($z=0; $z<count($scores[$i]); $z++)
        {
            $each_scores_1[$i] = $each_scores_1[$i] + $scores[$i][$z];
        }
        $each_scores_2 = $each_scores_1[$i] + $each_scores_2;
    }

        print "총합 :" . $each_scores_2;


?>