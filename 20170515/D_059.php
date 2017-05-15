<?php

$s = trim(fgets(STDIN));
$s = str_replace(array("\r\n","\r","\n"), '', $s);
$s = explode(" ", $s);

if ($s[0] == "J" && $s[1] == "J") {
    $s[1] = "Q";
}

echo "$s[0] $s[1]";
 ?>
