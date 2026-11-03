<?php



$pacientes = [
   "Paciente 1",
   "Paciente 2",
   "Paciente 3",
   "Paciente 4",
   "Paciente 5"
];


$ponto = 0;
$zumbis = 0;

foreach ($pacientes as $paciente) {
    $ponto = 0;
    $nome = readline("digite o Nome: ");
    $febre = readline("digite se tem febre(0 para nao 1 para sim): \n");
    $palida = readline("digite se tem pele palida(0 para nao 1 para sim): \n");
    $agressivo = readline("digite se é agresiv(0 para nao 1 para sim): \n");
    $nobpm = readline("digite se ta sem coração(0 para nao 1 para sim): \n");
    $fome = readline("digite se ta co fome(0 para nao 1 para sim): \n");

    echo "$nome possui: \n";
    if ($febre == true) {
        $ponto++;
        echo "febre\n";
    }
    if ($palida == true) {
        $ponto++;
        echo "pele palida\n";
    }
    if ($agressivo == true) {
        $ponto++;
        echo "comportamento agressivo\n";
    }
    if ($nobpm == true) {
        $ponto++;
        echo "ausencia de batimentos cardiacos\n";
    }
    if ($fome == true) {
        $ponto++;
        echo "fome por cerebros\n";
    }



    if ($ponto == 5) {
        $zumbis++;
    }



    // deixar para verificar condiçao
    echo "$nome esta: ";
    if ($ponto <= 1) {
        echo "saudavel\n";
    } else if ($ponto == 2 || $ponto == 3) {
        echo "suspeito\n";
    } else if ($ponto == 4) {
        echo "Avancado\n";
    } else {
        echo "ALERTA DE ZUMBI\n";
    }
    echo "\n";
}

if ($zumbis >= 2) {
    echo "alerta de surto zumbi";
} else{
    echo "sob controle";
}
