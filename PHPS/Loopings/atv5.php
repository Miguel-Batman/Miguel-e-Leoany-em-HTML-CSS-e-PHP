<!-- usando for -->
<?php
$resultado = 0;
for ($i = 0; $i <= 100; $i++){
    $resultado = $resultado + $i;
}echo "$resultado"


?>


<!-- usando while -->
<?php

$num1 = 1;
$resultado = 0;
while ($num1 <= 100){
    $resultado = $resultado + $num1;
    $num1++;
}echo "$resultado"


?>