<?php

for ($i = 0; $i < 5; $i++) {
    $p[$i] = trim(fgets(STDIN));
}

for ($i = 0; $i < count($p); $i++) {
    if (0 < $i) {
        echo $p[$i] - $p[$i - 1] . "\n";
    }
}

 ?>
