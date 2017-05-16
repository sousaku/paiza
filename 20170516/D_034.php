<?php

$p = trim(fgets(STDIN));
$n = 21 % $p;
if ($n == 0) {
    echo $p;
}
else {
    echo $n;
}
 ?>
