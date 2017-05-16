<?php

$s = trim(fgets(STDIN));
$search = array('5', '4', '3', '2', '1');
$replace = array('A', 'B', 'C', 'D', 'E');
echo str_replace($search, $replace, $s);

 ?>
