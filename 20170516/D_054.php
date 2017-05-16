<?php

$p = trim(fgets(STDIN));

if (strlen($p) < 11) {
    echo 11 - strlen($p);
}
else {
    echo "OK";
}

 ?>
