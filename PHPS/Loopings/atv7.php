<?php

$soma = 0;
$nota1 = readline("Digite a nota do 1° aluno: ");
$nota2 = readline("Digite a nota do 2° aluno: ");
$nota3 = readline("Digite a nota do 3° aluno: ");
$nota4 = readline("Digite a nota do 4° aluno: ");
$nota5 = readline("Digite a nota do 5° aluno: ");
$notas = [$nota1, $nota2, $nota3, $nota4, $nota5];

for ($i = 0; $i < 5; $i++) {
    echo "$notas[$i]\n";
    $soma = $soma + $notas[$i];
    if ($i == 4){
        echo "A soma de todos é $soma";
    }
}
?>