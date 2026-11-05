<?php

$numeros = [5, 10, 15, 20, 25, 19, 80, 73, 67, 43];


foreach ($numeros as $numero) {
    $verif = $numero % 2;
    if ($verif == 0){
        echo $numero . " é par\n";
        }else {
        echo $numero . " é impar\n";
    }
}
