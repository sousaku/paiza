<?php
function exploads($var) {
    $var = str_replace(array("\r\n","\r","\n"), '', $var);
    $var = explode(" ", $var);
    return $var;
}

$p = exploads(trim(fgets(STDIN)));
$s = trim(fgets(STDIN));

for ($i = 0; $i < $s; $i++) {
    $x[$i] = exploads(trim(fgets(STDIN)));
    if (pow(($x[$i][0] - $p[0]), 2) + pow(($x[$i][1] - $p[1]), 2) >= pow($p[2], 2)) {
        $anzen[$i] = "silent";
    }
    else {
        $anzen[$i] = "noisy";
    }
}
for ($i = 0; $i < $s; $i++) {
    echo $anzen[$i] . "\n";
}
 ?>
