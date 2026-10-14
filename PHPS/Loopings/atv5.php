<!-- usando for -->
<?php



?>
<!-- usando while -->
<?php

$num = 1;
$num2 = 0;
$resultado = 0;
$soma = 1;
while ($num <= 100){
    $resultado = $resultado + $soma;
    $soma = $num++ + $num - 1;
    
}echo "$resultado"


?>