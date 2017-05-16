<?php

$p = trim(fgets(STDIN));

if (70 < $p) {
    echo "rainy";
}
else if (30 < $p) {
    echo "cloudy";
}
else {
    echo "sunny";
}

 ?>
