<?php

$n = trim(fgets(STDIN));
$m = trim(fgets(STDIN));
$j = 0;
$kaisu = 0;

for ($i = 0; $i < $m; $i++) {
    $r_m[$i] = trim(fgets(STDIN));
    $pos = strpos($r_m[$i], $n);
    if ($pos === false) {
        $room[$kaisu] = $r_m[$i];
        $kaisu++;
    }
    else {
        $j++;
    }
}

if ($j === count($r_m)) {
    echo "none \n";
}
else {
    for ($i = 0; $i < count($room); $i++) {
        echo $room[$i] . "\n";
    }
}

 ?>
