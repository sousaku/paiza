<?php
function exploads($var) {
    $var = str_replace(array("\r\n","\r","\n"), '', $var);
    $var = explode(" ", $var);
    return $var;
}

function meirei($array) {
    global $var1, $var2;
    // for ($i = 0; $i < count($array[$i]); $i++) {
    if ($array[0] == "SET") {
        if ($array[1] == 1) {
            $var1 = $array[2];
        }
        else if ($array[1] == 2) {
            $var2 = $array[2];
        }
    }
    else if ($array[0] == "ADD") {
        $var2 = $var1 + $array[1];
    }
    else if ($array[0] == "SUB") {
        $var2 = $var1 - $array[1];
    }
}

$N = trim(fgets(STDIN));
$var1 = 0;
$var2 = 0;

for ($i = 0; $i < $N; $i++) {
    $s_N[$i] = exploads(trim(fgets(STDIN)));
    meirei($s_N[$i]);
}
echo $var1 . " " . $var2 . "\n";
 ?>
