<?php

$segredo = 12312;

do {
    
$resposta = readline("Digite o numero secreto: ");

if ($resposta > $segredo){
    echo "Seu numero esta maior que o segredo\n";
} else if ($resposta < $segredo)
    echo "Sua resposta esta menor que o segredo\n";

}while ($resposta != $segredo);

echo "Parabéns, acertou";

?>