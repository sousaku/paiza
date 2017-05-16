<?php

$p = trim(fgets(STDIN));
$p = str_replace(array("\r\n","\r","\n"), '', $p);
$p = explode(" ", $p);
$a = 0;

for ($i = 0; $i < count($p); $i++) {
    if ($a < $p[$i]) {
        $a = $p[$i];
    }
}
echo $a;

 ?>
