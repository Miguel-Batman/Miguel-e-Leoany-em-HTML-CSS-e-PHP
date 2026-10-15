<!-- usando for -->
<?php

$senhacorreta = 1234;
$tentativa = 0;

for ($i = 0; $i < 1; $i++) {
    $tentativa = readline("Digite a Senha: ");
    if ($tentativa != $senhacorreta)
        echo "Senha Incorreta\n";
        $i--;

    $tamtentativa = (strlen($tentativa));
    if ($tamtentativa > 4) {
        echo "A senha possui so 4 digitos \n";
    }

    if ($tentativa == $senhacorreta) {
        $i++;
    }
}


?>
<!-- usando while -->
<?php

$senhacorreta = 1234;
$tentativa = 0;

while ($tentativa != $senhacorreta){
    $tentativa = readline("Digite a Senha: ");

    if ($tentativa != $senhacorreta)
        echo "Senha Incorreta\n";

    $tamtentativa = (strlen($tentativa));
    if ($tamtentativa > 4){
        echo "A senha possui so 4 digitos \n";
    }
}

?>