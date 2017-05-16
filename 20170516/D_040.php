<?php

for ($i = 0; $i < 7; $i++) {
    $p[$i] = trim(fgets(STDIN));
}
$i = 0;

foreach ($p as $value) {
    if ($value <= 30) {
        $i++;
    }
}
echo $i;
 ?>
