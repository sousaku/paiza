<?php

$p = trim(fgets(STDIN));
$p = str_replace(array("\r\n","\r","\n"), '', $p);
//$p = explode(" ", $p);
//$time = explode(":", $p[1]);

$date = date_create("$p");
echo date_format($date, 'm/d H:i');
 ?>
