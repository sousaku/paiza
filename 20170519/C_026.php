<?php
function exploads($var) {
    $var = str_replace(array("\r\n","\r","\n"), '', $var);
    $var = explode(" ", $var);
    return $var;
}

$N = exploads(trim(fgets(STDIN)));
$situ = 0;

for ($i = 1; $i <= $N[0]; $i++) {
    $m_N[$i] = exploads(trim(fgets(STDIN)));
    if (abs($m_N[$i][1] - $N[1]) <= $N[2]) {
        if ($situ < $m_N[$i][0]) {
            $situ = $m_N[$i][0];
            $num = $i;
        }
    }
}
if (isset($num)) {
    echo $num . "\n";
}
else {
    echo "not found\n";
}
 ?>
