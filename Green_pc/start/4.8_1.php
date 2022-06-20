<?php

for($i=9; 0<$i; $i--)
{
    for($z=9; 0<$z; $z--)
    {   
        $val = $i*$z;
        print "$i x $z = $val" . "<br>";
    }
    if($i>1)
    print "<br>----------------------------<br>";

}
?>