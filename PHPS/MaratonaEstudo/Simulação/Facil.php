<?php


$astro = [
    "Astronauta 1",
    "Astronauta 2",
    "Astronauta 3",
    "Astronauta 4",
    "Astronauta 5"
];

$apto = 0;

foreach ($astro as $cand) {
    $nome = readline("Digite seu nome: ");
    $ponto = readline("Quantos pontos adquiriu?: ");
    while ($ponto > 100) {
        $ponto = readline("Quantos pontos adquiriu?: ");
    }
    if ($ponto >= 80 && $ponto <= 100) {
        echo "$nome apto com $ponto pontos\n";
        $apto++;
    } else if ($ponto >= 50 or $ponto <= 80) {
        echo "$nome Em Treinamento com $ponto pontos\n";
    } else {
        echo "$nome nao apto com $ponto pontos\n";
    }
}
echo "Há $apto candidatos aptos\n";

if ($apto >= 2) {
    echo "MISSÃO AUTORIZADA";
} else {
    echo "MISSÃO CANCELADA";
}
