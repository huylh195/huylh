<?php
require "../TM1/1.php";
        array_push ($number, '7','8','9');
        $count = count($number);
        //  $tong = array_sum($number);
        $tong = 0;
    for($i=0;$i<$count;$i++)
   {
        $tong = $tong + $number[$i];
    }
    echo "tong = ".$tong; 
?>

