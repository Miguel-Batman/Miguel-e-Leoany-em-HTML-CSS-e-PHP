<?php

$num = readline("digite o numero que deseja: ");
$soma = 0;

echo "Multiplos de $num\n";

for ($i = 1; $i <= $num; $i++){

    $verif = $num % $i;

    if (($verif == 0) && $soma != $num){
        $soma += $i;
        echo "$i\n";
    }

    if (($soma == $num) && $i == $num){
        echo "$num É um numero perfeito!!";
    }else if(($soma != $num) && $i == $num) {
        echo "Seu numero não é perfeito!!";
    }
} 

?>