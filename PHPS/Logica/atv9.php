<?php

$respostas = 5;

echo "Telefonou para a vítima?
Esteve no local do crime?
Mora perto da vítima?
Devia para a vítima?
Já trabalhou com a vítima?
";

if ($respostas == 2) {
    echo "Suspeita";
} elseif ($respostas == 3 or $respostas == 4) {
    echo "Cúmplice";
} elseif ($respostas == 5) {
    echo "Assassino de bebe";
} else {
    echo "Inocente";
}

?>