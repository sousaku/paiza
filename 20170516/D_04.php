<?php

for ($i = 0; $i < 3; $i++) {
    $p[$i] = trim(fgets(STDIN));
}

if ($p[0] == $p[1] && $p[0] == $p[2]) {
    echo "YES";
}
else {
    echo "NO";
}
 ?>
