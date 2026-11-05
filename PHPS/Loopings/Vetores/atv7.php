<?php

$numeros = [2, 5, 7];
$V = 1;
foreach ($numeros as $num) {
    for ($i = 1; $i <= 10; $i++) {
        echo "|$num X $i = " . $num * $i . " | ";
        $V++;
        if ($V == 3){
            echo "\n";
            $V = 1;
        }
    }
    echo "\n \n";
}

?>