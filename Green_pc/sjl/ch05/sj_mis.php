<?php

$name = array("사람1","사람2","사람3","사람4","사람5","사람6","사람7","사람8","사람9");

while ($name_1 == $name_2)
{
    $name_1 = rand(0,8);
    $name_2 = rand(0,8);
}
if($name_1 !== $name_2)
{
    print $name[$name_1] . " ". $name[$name_2];
}




// if($name_1===$name_2)
// {
//     print "다시 돌리시오.";}

//     else{
// print $name[$name_1]; print $name[$name_2]; }

// print "$name_1 $name_2";

// if($name_1===$name_2)
// {
//     print "다시 돌리시오.";}

//     else{

// switch ($name_1)
// {
//     case 1:
//         print "승재";
//         break;
//     case 2:
//         print "사람1";
//         break;
//         case 3:
//             print "사람2";
//             break;
//             case 4:
//                 print "사람3";
//                 break;
//                 case 5:
//                     print "사람4";
//                     break;
//                     case 6:
//                         print "사람5";
//                         break;
//                         case 7:
//                             print "사람6";
//                             break;
//                             case 8:
//                                 print "사람7";
//                                 break;
//                                 case 9:
//                                     print "사람8";
//                                     break;

// }
// print " ";
// switch ($name_2)
// {
//     case 1:
//         print "승재";
//         break;
//     case 2:
//         print "사람1";
//         break;
//         case 3:
//             print "사람2";
//             break;
//             case 4:
//                 print "사람3";
//                 break;
//                 case 5:
//                     print "사람4";
//                     break;
//                     case 6:
//                         print "사람5";
//                         break;
//                         case 7:
//                             print "사람6";
//                             break;
//                             case 8:
//                                 print "사람7";
//                                 break;
//                                 case 9:
//                                     print "사람8";
//                                     break;

// }
// }

?>