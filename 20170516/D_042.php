<?php

$p = trim(fgets(STDIN));
$p = str_replace(array("\r\n","\r","\n"), '', $p);
$p = explode(" ", $p);

$n = trim(fgets(STDIN));
$n = str_replace(array("\r\n","\r","\n"), '', $n);
$n = explode(" ", $n);

echo $p[0] * $n[1] - $n[0] * $p[1];

 ?>
