<?php

$num = readline("digite o numero que deseja: ");

for ($i = 1; $i < $num; $i++){
    if ($num % $i == 0)
        echo "$i\n";
}


?>