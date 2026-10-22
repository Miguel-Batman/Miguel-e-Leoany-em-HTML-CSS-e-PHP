<?php

$num = readline("digite o numero que deseja: ");
$soma = 0;

for ($i = 1; $i < $num; $i++){
    $verif = $num % $i;
    if ($verif == 0 && $$soma != $num){
        $soma =+ $i;
    }

    
    if ($soma == $num){
    
        echo "true\n";
    } else {
        
        echo "false\n";
    }
}

?>