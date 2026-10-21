<?php

$resultado = 0;
for ($i = 1; $i <= 5; $i++) {
    $nota = readline("Digite a nota do aluno $i: ");
    $resultado = $resultado + $nota;
} echo "A média é de: ". $resultado / 5;

?>
