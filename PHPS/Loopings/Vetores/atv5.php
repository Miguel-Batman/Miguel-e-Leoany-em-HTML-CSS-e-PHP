<?php

$numeros = [5, 10, 15, 20, 25];

for ($i = 0; $i < count($numeros); $i++) {
    $numeros[$i] = $numeros[$i]*2;
    echo $numeros[$i] . "\n";
}

?>
