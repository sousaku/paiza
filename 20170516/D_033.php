<?php

$p = trim(fgets(STDIN));
$p = str_replace(array("\r\n","\r","\n"), '', $p);
$p = explode(" ", $p);

$s = str_split($p[0]);
$t = str_split($p[1]);

echo "$s[0].$t[0]";
 ?>
