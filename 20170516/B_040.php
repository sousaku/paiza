<?php

$abc = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

$p = trim(fgets(STDIN));
$p = str_replace(array("\r\n","\r","\n"), '', $p);
$p = explode(" ", $p);
$angou = str_split($p[1]);

$S = trim(fgets(STDIN));
$kai = str_split($S);

for ($i = 0; $i < $p[0]; $i++) {

    for ($j = 0; $j < 26; $j++) {
        for ($k = 0; $k < 26; $k++) {
            $kai[$j] = str_replace($angou[$k], $abc[$k], $kai[$j]);
            if ($kai[$j] == $abc[$j]) {
                break;
            }
        }
    }
    $angou = $kai;
}
echo $kai . count($abc);

 ?>
