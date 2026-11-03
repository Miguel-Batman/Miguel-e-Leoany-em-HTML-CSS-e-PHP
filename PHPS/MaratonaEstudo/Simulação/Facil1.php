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


echo "13 – Candidata Ana.
22 – Candidato João.
14 – Voto em branco.
";
foreach ($eleitores as $eleitor) {
    $voto = readline("digite seu voto: ");

    while ($voto != 13 and $voto != 22 and $voto != 14) {
        echo "Candidato inexistente";
        $voto = readline("digite seu voto: ");
    }

    if ($voto == 13){
        $voto13++;
        echo "voto confirmado";
    }else if ($voto == 22){
        $voto22++;
        echo "voto confirmado";
    }else{
        $votob++;
        echo "voto Nulo confirmado";
    }

} echo "voto em 13: $voto13 votos em 22: $voto22 Votos em nulo: $votob";

?>