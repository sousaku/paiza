<?php
$N = trim(fgets(STDIN));
$H = [0, 200];

for ($i = 0; $i < $N; $i++) {
    $p[$i] = trim(fgets(STDIN));
}

for ($i = 0; $i < count($p); $i++) {
    $num = str_replace(array("\r\n","\r","\n"), '', $p[$i]);
    $num = explode(" ", $num);
    if ($num[0] == "ge") {
        if ($H[0] <= $num[1]) {
            $H[0] = $num[1];
        }
    }
    else {
        if ($num[1] <= $H[1]) {
            $H[1] = $num[1];
        }
    }
}

echo $H[0] . " " . $H[1];
 ?>
