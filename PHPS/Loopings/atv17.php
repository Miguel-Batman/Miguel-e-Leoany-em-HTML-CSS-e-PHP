<?php

$num = readline("Digite seu numero: ");

for ($i = 1; $i <= $num; $i++){
    if ($num % $i == 0){
        echo "$i é multiplo\n";
    }
}

?>
