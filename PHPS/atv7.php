<?php
$lado1 = 88;
$lado2 = 77;
$lado3 = 66;

if ($lado1 == $lado2 && $lado2 == $lado3) {
    echo "este triangulo e equilatero";
} elseif ($lado1 == $lado2 or $lado2 == $lado3 or $lado3 == $lado1){
    echo "este triangulo e isosceles";
} else {
    echo "este triangulo e escaleno";
}

?>