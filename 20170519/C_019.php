<?php
function hantei($N, $S) {
    if ($N == $S) {
        echo "perfect" . "\n";
    }
    else if (abs($N - $S) == 1) {
        echo "nearly" . "\n";
    }
    else {
        echo "neither" . "\n";
    }
}

$Q = trim(fgets(STDIN));
for ($i = 0; $i < $Q; $i++) {
    $S = 0;
    $N[$i] = trim(fgets(STDIN));
    for ($j = 1; $j < $N[$i]; $j++) {
        $NUM = $N[$i] % $j;
        if ($NUM % $j == 0) {
            $S += $j;
        }
    }
    hantei($N[$i], $S);
}

 ?>
