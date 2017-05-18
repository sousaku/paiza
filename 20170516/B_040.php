<?php
function exploads($var) {
    $var = str_replace(array("\r\n","\r","\n"), '', $var);
    $var = explode(" ", $var);
    return $var;
}

function kaidoku($angou1, $abc1, $moji1) {
    $a = null;
    for ($i = 0; $i < count($angou1); $i++) {
        for ($j = 0; $j < count($abc1); $j++) {
            $a[$i] = str_replace($angou1[$j], $abc1[$j], $moji1[$i]);
            if (isset($a[$i])) {
                break;
            }
        }
    }
    return $a;
}

$abc = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

$n = exploads(trim(fgets(STDIN)));
$angou = str_split($n[1]);

$S = trim(fgets(STDIN));
$moji = str_split($S);

for ($i = 0; $i < $n[0]; $i++) {
    $kai = kaidoku($angou, $abc, $moji);
    $angou = null;
    $angou = $kai;
}
for ($i = 0; $i < 26; $i++) {
    echo $kai[$i];
}
 ?>
