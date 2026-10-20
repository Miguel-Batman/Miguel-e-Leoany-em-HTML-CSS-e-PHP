<?php

$num = readline("Digite o numero que você deseja saber a tabuada: ");

for ($i=1; $i<=10; $i++){
    echo "$num X $i = " . $num * $i . "\n";
}

?>