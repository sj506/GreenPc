<?php
    $scores = array(
            // 국   영  수
        array(100,100,100,70), //영수
        array(90,80,70,70),    //순자
        array(50,50,80,70),    //영철
        array(50,80,30,70),     //철수
        array(30,30,30,70),
        array(70,70,70,70),

    );
    /*
    국어
    합계 : ?, 평균 : ?
    
    영어
    합계 : ?, 평균 : ?
    
    수학
    합계 : ?, 평균 : ?
    */
    $subject = array("국어","영어","수학","과학");

    for($i=0; $i<count($scores); $i++)
    {
        for($z=0; $z<count($scores); $z++)
        {
            $each_scores[$i] += $scores[$z][$i];
        }
        $each_avg[$i] = $each_scores[$i] / count($scores);
    }

    for($i=0; $i<count($subject); $i++)
    {
    print $subject[$i] ."<br> 총합 :" . $each_scores[$i] 
    ." 평균 : " . $each_avg[$i] .  "<br>";  
    }

?>