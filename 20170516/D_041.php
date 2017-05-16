<?php

$p = trim(fgets(STDIN));
$p = str_replace(array("\r\n","\r","\n"), '', $p);
$p = explode(" ", $p);

$n = $p[1] * $p[2];
if ($p[0] < $n) {
    echo "OK";
}
else {
    echo "NG";
}
 ?>
