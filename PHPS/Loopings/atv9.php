<?php

$resultado = 0;

do {
$num = readline("Digite numeros para a soma: ");
$resultado = $num + $resultado;

} while ($num != 0);

echo "A soma de todos os numeros é: $resultado";

?>