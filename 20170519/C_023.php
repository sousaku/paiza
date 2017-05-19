<?php
function exploads($var) {
    $var = str_replace(array("\r\n","\r","\n"), '', $var);
    $var = explode(" ", $var);
    return $var;
}

$a = exploads(trim(fgets(STDIN)));
$N = trim(fgets(STDIN));
for ($i = 0; $i < $N; $i++) {
    $a_N[$i] = exploads(trim(fgets(STDIN)));
}

for ($i = 0; $i < $N; $i++) {
    $kaisu = 0;
    for ($j = 0; $j < 6; $j++) {
        for ($k = 0; $k < 6; $k++) {
            if ($a[$j] == $a_N[$i][$k]) {
                $kaisu++;
            }
        }
    }
    echo $kaisu . "\n";
}
 ?>
