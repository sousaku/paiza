<?php
function exploads($var) {
    $var = str_replace(array("\r\n","\r","\n"), '', $var);
    $var = explode(" ", $var);
    return $var;
}

function ADD($array) {
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i][2];
    }
    return $sum;
}

$M = trim(fgets(STDIN));
$N = trim(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    $x_N[$i] = exploads(trim(fgets(STDIN)));
}

$sum = ADD($x_N);

echo ceil($sum / $M) . "\n";
 ?>
