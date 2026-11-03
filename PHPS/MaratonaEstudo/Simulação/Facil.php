<?php


$astro = [
    ["nome" => "Jezo", "ponto" => 100],
    ["nome" => "Mica", "ponto" => 40],
    ["nome" => "Mig", "ponto" => 100],
    ["nome" => "War", "ponto" => 20],
    ["nome" => "Gus", "ponto" => 90]
];

$apto = 0;

foreach ($astro as $cand) {
    $nome = $cand["nome"];
    $ponto = $cand["ponto"];

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
