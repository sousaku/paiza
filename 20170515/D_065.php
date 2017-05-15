<?php

$input_lines = fgets(STDIN);

if (floor($input_lines / 100) == 4) {
    echo "error";
}
else if (floor($input_lines / 100) == 2) {
    echo "ok";
}
else {
    echo "unknown";
}
 ?>
