<?php

$eleitores = [
    "Eleitor 1",
    "Eleitor 2",
    "Eleitor 3",
    "Eleitor 4",
    "Eleitor 5",
    "Eleitor 6",
    "Eleitor 7",
    "Eleitor 8",
    "Eleitor 9",
    "Eleitor 10"
];


$voto13 = 0;
$voto22 = 0;
$votob = 0;


echo "13 – Candidata Lula.
22 – Candidato Flafla.
14 – Voto em branco(Renan).
";
foreach ($eleitores as $eleitor) {
    $voto = readline("digite seu voto: ");

    while ($voto != 13 and $voto != 22 and $voto != 14) {
        echo "Candidato inexistente\n";
        $voto = readline("digite seu voto: ");
    }

    if ($voto == 13){
        $voto13++;
        echo "voto confirmado\n";
    }else if ($voto == 22){
        $voto22++;
        echo "voto confirmado\n";
    }else{
        $votob++;
        echo "voto Nulo confirmado\n";
    }

} echo "Votos em 13: $voto13. Votos em 22: $voto22. Votos em nulo: $votob\n";

if ($voto13>=$voto22){
    echo "lulinha ganhou com $voto13 votos";
}else if ($voto13<=$voto22){
    echo "bolsomico ganhou com $voto22 votos";
}else{
    echo "inuteis ambos perderam aura";
}

?>