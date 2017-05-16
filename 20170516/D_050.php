<?php

$p = trim(fgets(STDIN));
$p = str_replace(array("\r\n","\r","\n"), '', $p);
$p = explode(" ", $p);

for ($i = 0; $i < count($p); $i++) {
    if (5 < $p[$i]) {
        $p[$i] = 5;
    }
} 
echo $p[0] + $p[1];
 ?>
