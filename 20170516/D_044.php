<?php

$p = trim(fgets(STDIN));
$p = str_replace(array("\r\n","\r","\n"), '', $p);
$p = explode(" ", $p);

if ($p[1] == "F") {
    echo "Hi, Ms. " . $p[0];
}
else {
    echo "Hi, Mr. " . $p[0];
}

 ?>
