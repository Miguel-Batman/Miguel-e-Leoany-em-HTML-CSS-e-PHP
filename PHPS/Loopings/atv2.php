<!-- usando for -->
<?php

for ($i = 1; $i <= 30; $i++) {
    if ($i % 2 == 0) {
        echo "$i\n";
    }
}

?>

<!-- usando while -->
<?php

$n = 1;

while ($n <= 30) {
    if ($n%2 == 0) {
        echo "$n\n";
    }
    $n++;
}

?>