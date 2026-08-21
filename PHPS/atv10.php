<?php
$carne = "file duplo";
$pcarne = 5;
$cartao = True;
$vcarne = 0;
$desconto = ($vcarne*5)/100;
$peso = 0;

if ($carne == "file duplo") {


    if ($pcarne <= 5 and $cartao == True) {
        $vcarne = 4.90;
        $desconto = ($vcarne*5)/100;
        $vcarne = $vcarne - $desconto;
        echo "          ===============================
            CASA DE CARNES
            Filé Duplo ($pcarne KG) - R$$vcarne
            Cartão Fidelidade?: Possui
            Desconto aplicado!
            TOTAL: R$ $vcarne";
    }
    elseif ($pcarne <= 5 and $cartao == False) {
       echo "          ===============================
            CASA DE CARNES
            Filé Duplo ($pcarne KG) - R$$vcarne
            Cartão Fidelidade?: Não
            Desconto aplicado!
            TOTAL: R$ $vcarne";
    } else {
        echo "preco igual a 5,80/KG";
    }






    

} elseif ($carne == "alcatra") {


    if ($pcarne <= 5) {
        echo "preco igual a 5,90/KG";
    } else {
        echo "preco igual a 6,80/KG";
    }



} else if ($carne == "picanha") {


    if ($pcarne <= 5) {
        echo "preco igual a 6,90/KG";
    } else {
        echo "preco igual a 7,80/KG";
    }



} else {
    echo "carne nao encontrada ou mais de uma carne";
}




?>