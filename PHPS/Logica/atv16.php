<?php

$forca = 14;
$inteligencia = 12;
$agilidade = 13;
if ($forca > $inteligencia and $forca > $agilidade) {
    echo "voce é um guerreiro. Possui $forca de força, $inteligencia de inteligência e $agilidade de agilidade";
} elseif ($inteligencia > $forca and $inteligencia > $agilidade) {
    echo "voce é um mago. Possui $forca de força, $inteligencia de inteligência e $agilidade de agilidade";
} elseif ($agilidade > $forca and $agilidade > $inteligencia) {
    echo "voce é um arqueiro. Possui $forca de força, $inteligencia de inteligência e $agilidade de agilidade";
} else {
    echo "voce é um hibrido. Possui $forca de força, $inteligencia de inteligência e $agilidade de agilidade";
}

?>