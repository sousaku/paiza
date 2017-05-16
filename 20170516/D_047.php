<?php

$m = ["Gold", "Silver", "Bronze"];
for ($i = 0; $i < 3; $i++) {
    $p[$i] = trim(fgets(STDIN));
}

for ($i = 0; $i < count($p); $i++) {
    echo $m[$i] . " " . $p[$i] . "\n";
}

 ?>
