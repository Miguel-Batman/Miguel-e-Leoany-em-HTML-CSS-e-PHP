<!-- usando for -->
<?php



?>
<!-- usando while -->
<?php

$senhacorreta = 1234;
$tentativa = 0;

while ($tentativa != $senhacorreta){
    $tentativa = readline("Digite a Senha: ");
    echo "Senha Incorreta\n";
    $tamtentativa = (strlen($tentativa));
    if ($tamtentativa > 4){
        echo "A senha possui so 4 digitos \n";
    }
}

?>