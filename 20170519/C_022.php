<?php
function exploads($var) {
    $var = str_replace(array("\r\n","\r","\n"), '', $var);
    $var = explode(" ", $var);
    return $var;
}

$n = trim(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $s[$i] = exploads(trim(fgets(STDIN)));
}
for ($i = 0; $i < $n; $i++) {
    $num1[$i] = $s[$i][2];
    $num2[$i] = $s[$i][3];
}
sort($num1, SORT_NATURAL | SORT_FLAG_CASE);
sort($num2, SORT_NATURAL | SORT_FLAG_CASE);

echo $s[0][0] . " " . $s[$n - 1][1] . " " . $num1[$n - 1] . " " . $num2[0];
 ?>
