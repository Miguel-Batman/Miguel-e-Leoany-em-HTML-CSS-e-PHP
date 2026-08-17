<?php
$n1=1000;
$n2=277;
$n3=390;
// 123 231 312 213 321 132
if ($n1<$n2 and $n2<$n3){
    echo "$n1 $n3";
} elseif ($n2<$n3 and $n3<$n1){
    echo "$n2 $n1";
} elseif ($n3<$n1 and $n1<$n2){
    echo "$n3 $n2";
} elseif ($n2<$n1 and $n1<$n3) {
    echo "$n2 $n3";
}   elseif ($n3<$n2 and $n2<$n1){
    echo "$n3 $n1";   
}   elseif ($n1<$n3 and $n3<$n2){
    echo "$n1 $n2";
}   
?>