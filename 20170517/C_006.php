<?php
function exploads($var) {
    $var = str_replace(array("\r\n","\r","\n"), '', $var);
    $var = explode(" ", $var);
    return $var;
}

$p = exploads(trim(fgets(STDIN)));
$s = exploads(trim(fgets(STDIN)));

for ($i = 0; $i < $p[1]; $i++) {
    $m[$i] = exploads(trim(fgets(STDIN)));
    $sum = 0;
    for ($j = 0; $j < $p[0]; $j++) {
        $sum += $s[$j] * $m[$i][$j];
    }
    $SUM[$i] = round($sum, 0);
}
sort($SUM, SORT_NATURAL | SORT_FLAG_CASE);

for ($i = 1; $i <= $p[2]; $i++) {
    echo $SUM[count($SUM) - $i] . "\n";
}
 ?>
