<?php

$p = trim(fgets(STDIN));
$p = str_replace(array("\r\n","\r","\n"), '', $p);
$p = explode(" ", $p);

echo pow($p[0], 3) - pow($p[1], 3);

 ?>
