<!-- usando for -->
<?php

$num = readline("Digite: ");
for ($i = 1; $i <= 10; $i++){
    echo $i*$num,"\n";
}

?>

<!-- usando while -->
<?php

$n = readline("Digite: ");
$verif = 1;
while ($verif <= 10){
    echo $n*$verif, "\n";
    $verif++;
}

?>