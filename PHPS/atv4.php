<?php

$salario = 38889;
$porcentagem = 0;
$calculo = ($salario*$porcentagem)/100;
$s_atual = $salario + $calculo;

if ($salario <= 280){
    $porcentagem = 20;
    $calculo = ($salario*$porcentagem)/100;
    $s_atual = $salario + $calculo;
    
    echo "Seu Salario anterior era $salario, agora apos um aumento de $porcentagem% voce recebera, $s_atual";
} elseif ($salario > 280 and $salario <= 700){
    $porcentagem = 15;
    $calculo = ($salario*$porcentagem)/100;
    $s_atual = $salario + $calculo;
    
    echo "Seu Salario anterior era $salario, agora apos um aumento de $porcentagem% voce recebera, $s_atual";
} elseif ($salario > 700 and $salario <= 1500){
    $porcentagem = 10;
    $calculo = ($salario*$porcentagem)/100;
    $s_atual = $salario + $calculo;
    
    echo "Seu Salario anterior era $salario, agora apos um aumento de $porcentagem% voce recebera, $s_atual";
} else{
    $porcentagem = 5;
    $calculo = ($salario*$porcentagem)/100;
    $s_atual = $salario + $calculo;
    
    echo "Seu Salario anterior era $salario, agora apos um aumento de $porcentagem% voce recebera, $s_atual";
}

?>