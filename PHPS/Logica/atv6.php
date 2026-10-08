<?php
$nota1 = 6;
$nota2 = 7;
$media = ($nota1 + $nota2)/2;

if ($media >= 9 and $media <= 10){
    echo "Sua nota 1 foi $nota1 sua nota 2 foi $nota2. Sua media é $media e voce recebeu um A e esta APROVADO";
} elseif ($media >= 7.5 and $media < 9) {
    echo "Sua nota 1 foi $nota1 sua nota 2 foi $nota2. Sua media é $media e voce recebeu um B e esta APROVADO";
} elseif ($media >= 6 and $media < 7.5) {
    echo "Sua nota 1 foi $nota1 sua nota 2 foi $nota2. Sua media é $media e voce recebeu um C e esta APROVADO";
} elseif ($media >= 4 and $media < 6) {
    echo "Sua nota 1 foi $nota1 sua nota 2 foi $nota2. Sua media é $media e voce recebeu um D e esta REPROVADO";
} elseif ($media >= 0 and $media < 4) {
    echo "Sua nota 1 foi $nota1 sua nota 2 foi $nota2. Sua media é $media e voce recebeu um E e esta REPROVADO";
}

?>