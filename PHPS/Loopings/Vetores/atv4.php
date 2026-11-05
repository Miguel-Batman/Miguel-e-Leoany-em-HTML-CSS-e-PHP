<?php

$notas = [5, 7, 10, 8, 2];
$soma = 0;
$qntnota = 0;
$media = 0;
foreach ($notas as $nota) {
    $soma += $nota;
    $qntnota++;
    $media = $soma/$qntnota;

}echo "$media";
