<?php
$n1 = 0;
for ($i = 1; $i <= 100; $i++){
    if ($i%3 == 0 and $i%5 == 0){
        echo "Eiiii Acordaaaa";
    }
    elseif ($i%3 == 0){
        echo "Eiiii";
    }
    elseif ($i%5 == 0){
        echo "Acorda";
    }
    else{
        echo "$i";
    }
}

?>