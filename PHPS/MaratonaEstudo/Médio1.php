<?php

$numa = readline("Digite o numero menor: ");
$numb = readline("Digite o numero maior: ");
$qntd = 0;
while ($numa > $numb) {
    $numb = readline("O segundo numero deve ser maior que o primeiro: ");
}

for($i = $numa; $i <= $numb; $i++){
    $verif = $i % 2;
    if ($verif == 1){
        echo "$i\n";
        $qntd++;
    }
}
