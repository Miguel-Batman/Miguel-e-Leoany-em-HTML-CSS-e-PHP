<?php

$frutas = ["banana","maça","pera","Uva","melancia"];

for ($i = 0; $i <= count($frutas); $i++){
    if ($i % 2 == 0)
        echo "$frutas[$i]\n";
}

?>