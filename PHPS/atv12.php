<?php
$peso = 50;
$altura = 168;
$IMC = ($peso/($altura * $altura));

if ($IMC <18.5 ) {
    echo "abaixo do peso";
} elseif ($IMC >= 18.5 and $IMC <= 25) {
    echo "peso normal";
} elseif ($IMC > 25 and $IMC <= 30) {
    echo "acima do peso";
} elseif ($IMC > 30 and $IMC <= 40) {
    echo "obeso";
} elseif ($IMC > 40 ) {
    echo "obesidade grave";
}

?>