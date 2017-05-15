<?php

$s = trim(fgets(STDIN));
$s = str_replace(array("\r\n","\r","\n"), '', $s);
$s = explode(" ", $s);

for ($i = 0; $i < count($s); $i++) {
    for ($j = 0; $j < $s[$i]; $j++) {
        if ($i % 2 === 0) {
            echo "A";
        }
        else {
            echo "B";
        }
    }
}
 ?>
