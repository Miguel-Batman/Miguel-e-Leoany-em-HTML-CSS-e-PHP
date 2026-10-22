<?php

$num = readline("digite o numero que deseja: ");

function Fibo(int $num): void{
    if($num<=0){
        return;
    }
    $a=0;
    $b=1;

    for($i=0;$i<$num;$i++){
        echo "$a ";

        $proximo=$a+$b;
        $a=$b;
        $b=$proximo;
    }

}
Fibo($num);


?>