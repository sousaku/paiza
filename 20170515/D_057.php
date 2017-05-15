<?php

$g = trim(fgets(STDIN));
$p = trim(fgets(STDIN));
$p = str_replace(array("\r\n","\r","\n"), '', $p);
$p = explode(" ", $p);

echo $p[$g - 1];

 ?>
