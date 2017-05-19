<?php
function exploads($var) {
    $var = str_replace(array("\r\n","\r","\n"), '', $var);
    $var = explode(" ", $var);
    return $var;
}

$n = trim(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $a_n[$i] = exploads(trim(fgets(STDIN)));
}

$m = trim(fgets(STDIN));
$kazu = 0;

for ($i = 0; $i < $m; $i++) {
    $c_m[$i] = exploads(trim(fgets(STDIN)));
}

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $m; $j++) {
        if ($a_n[$i][0] == $c_m[$j][0]) {
            if (floor($c_m[$j][1] / $a_n[$i][1]) !== 0) {
                if ($kazu == 0 || floor($c_m[$j][1] / $a_n[$i][1]) < $kazu) {
                    $kazu =  floor($c_m[$j][1] / $a_n[$i][1]);
                }
            }
        }
    }
}

echo $kazu . "\n";
 ?>
