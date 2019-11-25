<?php

/* function add($a,$b) {
    $sum=$a+$b;
    return $sum;
}
$result=add(3,5);
echo $result; */


function add($a,$b) {
    $sum=$a+$b;
    echo $sum;
}
add(1,4,5,6,4,5);
echo "<br>";

//不定參數數量，以...+參數 做成陣列方式傳入參數 
function add2(...$a){
    $sum=0;
    foreach ($a as $n) {
        $sum=$sum+$n;
    }
    echo $sum;
}
add2(1,2,3,4,5);



















?>