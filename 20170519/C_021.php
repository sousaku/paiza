<?php
function exploads($var) {
    $var = str_replace(array("\r\n","\r","\n"), '', $var);
    $var = explode(" ", $var);
    return $var;
}
$r = exploads(trim(fgets(STDIN)));
$n = trim(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $x[$i] = exploads(trim(fgets(STDIN)));
    $zahyou = pow(($x[$i][0] - $r[0]), 2) + pow(($x[$i][1] - $r[1]), 2);
    if (pow($r[2], 2) <= $zahyou && $zahyou <= pow($r[3], 2)) {
        echo "yes" . "\n";
    }
    else {
        echo "no". "\n";
    }
}
 ?>
