<?php
    /*

    $score = rand(0,120);
    print "점수 : $score <br>";

    $sign = "F";

    if($score > 100 || $score < 0)
    {
        print "잘못된 값";
    }
    else
    {
        $val_1 = intval($score / 10);
        switch($val_1)
        {
            case 10: case 9:
                $sign = "A";
                break;

            case 8:
                $sign = "B";
                break;
            
            case 7:
                $sign = "C";
                break;
            case 6:
                $sign = "D";
                break;
        }
    }

    */


    // $score = rand(0,120);
    // $score = 60;

    // print "점수 : $score <br>";

    // switch($score)
    // {
    //     case ($score>=97 && $score<=100):
    //         print "A+";
    //     break;

    //     case ($score>93 && $score<97):
    //         print "A";
    //     break;
        
    //     case ($score>=90 && $score<=93):
    //         print "A-";
    //     break;

    //     case ($score>=87 && $score<=89):
    //         print "B+";
    //     break;

    //     case ($score>83 && $score<87):
    //         print "B";
    //     break;
        
    //     case ($score>=80 && $score<=83):
    //         print "B-";
    //     break;

    //     case ($score>=77 && $score<=79):
    //         print "C+";
    //     break;

    //     case ($score>73 && $score<77):
    //         print "C";
    //     break;
        
    //     case ($score>=70 && $score<=73):
    //         print "C-";
    //         break;

    //     case($score>=67 && $score<=69):
    //         print "D+";
    //         break;

    //     case ($score>63 && $score<67):
    //         print "D";
    //         break;
        
    //     case ($score>=60 && $score<=63):
    //         print "D-";
    //         break;

    //     case ($score>=0 && $score<60):
    //         print "F";
    //         break;
        
    //     default:
    //         print "잘못된 값";
    //         break;
        
    // }
    
    $score = rand(0,120);

    print "점수 : $score <br>";

    if($score > 100 || $score < 0) 
    {
        print "잘못된 값";
    } 
    else 
    {
        $sign = "F";
        $symbol = "";
        $val_1 = intval($score / 10);    
        switch($val_1) 
        {
            case 10: case 9:
                $sign = "A";
                break;
            case 8:
                $sign = "B";
                break;
            case 7:
                $sign = "C";
                break;
            case 6:
                $sign = "D";
                break;
        }
        $val_2 = $score % 10; // 1의 자리
        if($score >= 60)
        {
            if($score === 100 || $val_2 >= 7)
            {
                $symbol = "+";
            } 
            else if($val_2 <= 3)
            {
                $symbol = "-";
            }
        }
        print $sign . $symbol;
    }


?>