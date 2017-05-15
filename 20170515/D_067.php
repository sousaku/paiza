<?php

$input_lines = fgets(STDIN);
$swith = "OFF";

if (is_int ($input_lines)) {
    if (1 <= $input_lines && $input_lines <= 100) {
        if ($input_lines % 2 == 0) {
            echo "$input_lines <br/>";
            $swith = "OFF";
        }
        else {
            echo "$input_lines <br/>";
            $swith = "ON";
        }
    }
}
echo "$swith";
 ?>
