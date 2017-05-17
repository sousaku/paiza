<?php

$str = trim(fgets(STDIN));
$str = str_replace(array("\r\n","\r","\n"), '', $str);
$str = explode(' ', $str);
$hako;
$op;
$r = 0;

for ($i = 0; $i < count($str); $i++) {
    if (is_int($str[$i])) {
        $hako[$i] = $str[$i];
        $basyo[$r] = $i;
        $r++;
    }
    else if ($str[$i] == 'x') {
        $op = $i;
    }
}

if ($op == 0) {
    if ($str[1] == '-') {
        echo $hako[$basyo[0]] + $hako[$basyo[1]];
    }
    else {
        echo $hako[$basyo[0]] - $hako[$basyo[1]];
    }
}
else if ($op == 2) {
    if ($str[1] == '-') {
        echo $hako[$basyo[1]] - $hako[$basyo[0]];
    }
    else {
        echo $hako[$basyo[0]] - $hako[$basyo[1]];
    }
}
else if ($op == 4) {
    if ($str[3] == '-') {
        echo $hako[$basyo[0]] - $hako[$basyo[1]];
    }
    else {
        echo $hako[$basyo[0]] + $hako[$basyo[1]];
    }
}
 ?>
