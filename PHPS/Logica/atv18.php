<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
   
</head>
<body>













    <?php
$n1 = 0;
for ($i = 1; $i <= 100; $i++){
    if ($i%3 == 0 and $i%5 == 0){
        echo "Eiiii Acordaaaa<br>";
    }
    elseif ($i%3 == 0){
        echo "Eiiii<br>";
    }
    elseif ($i%5 == 0){
        echo "Acorda<br>";
    }
    else{
        echo "$i<br>";
    }
}





























?>
</body>
</html>
