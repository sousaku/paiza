<?php

$s = trim(fgets(STDIN));
$s = str_replace(array("\r\n","\r","\n"), '', $s);
$s = explode(" ", $s);


if ($s[0] <= $s[1]) {
    echo $s[1] - $s[0];
}
else {
    echo "No";
}
 ?>
