<?php
function exploads($var) {
    $var = str_replace(array("\r\n","\r","\n"), '', $var);
    $var = explode(" ", $var);
    return $var;
}

$hako = 0;
$n = exploads(trim(fgets(STDIN)));
$n[1] = $n[1] * 2;

for ($i = 0; $i < $n[0]; $i++) {
    $h_n[$i] = exploads(trim(fgets(STDIN)));
}

for ($i = 0; $i < $n[0]; $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($n[1] <= $h_n[$i][$j]) {
                $hako++;
        }
    }
    if ($hako == 3) {
        echo $i + 1 . "\n";
    }
    $hako = 0;
}
 ?>
