<?php

$p = trim(fgets(STDIN));
$p = str_replace(array("\r\n","\r","\n"), '', $p);
$p = explode(" ", $p);
$i = 0;

foreach($p as $value) {
    if ($value == "W") {
        $i++;
    }
}
if (5 <= $i) {
    echo "OK";
}
else {
    echo "NG";
}
 ?>
