<?php

$a = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J"];

$s = trim(fgets(STDIN));
$s = str_replace(array("\r\n","\r","\n"), '', $s);
$s = explode(" ", $s);

$k = 0;

for ($i = 0; $i < count($s); $i++) {
    for ($j = 0; $j < $s[$i]; $j++) {
        echo $a[$k];
        $k++;
    }
    echo "<br/>";
}
 ?>
