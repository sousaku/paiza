<?php

$p = trim(fgets(STDIN));

for ($i = 0; $i < $p; $i++) {
    $H = trim(fgets(STDIN));
    $H = str_replace(array("\r\n","\r","\n"), '', $H);
    $N[$i] = explode(".", $H);
}

for ($i = 0; $i < $p; $i++) {
    $s = 0;
    for ($j = 0; $j < count($N[$i]); $j++) {
        if (count($N[$i]) == 4) {
            if ($N[$i][$j] < 256) {
                $s++;
            }
        }
    }
    if ($s == 4) {
        echo "True" . "\n";
    }
    else {
        echo "False" . "\n";
    }
}

 ?>
