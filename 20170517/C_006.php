<?php

$test = 0;
$tortal;
$str = trim(fgets(STDIN));
$str = str_replace(array("\r\n","\r","\n"), '', $str);
$str = explode(' ', $str);

$p = trim(fgets(STDIN));
$p = str_replace(array("\r\n","\r","\n"), '', $p);
$p = explode(' ', $p);
for ($i = 0; $i < $str; $i++) {
    $S = trim(fgets(STDIN));
    $S = str_replace(array("\r\n","\r","\n"), '', $S);
    $Score[$i] = explode(' ', $S);
}
for ($i = 0; $i < $str; $i++) {
    for ($j = 0; $j < $str; $j++) {
        $test[$i] += $str[$i] * $Score[$i][$j];
    }
}
for ($i = 0; $i < $str-1; $i++) {
    if (round($test[$i+1]) <= round($test[$i])) {
        $tortal = round($test[$i]);
        $test[$i] = $test[$i+1];
        $test[$i+1] = $tortal;
    }
}
for ($i = 0; $i < $str-1; $i++) {
    echo $test[$str[2] - $i] . "\n";
}
 ?>
