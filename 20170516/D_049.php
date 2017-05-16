<?php

$S = trim(fgets(STDIN));
if (strpos($S,'noaki') !== false) {
    $S = str_replace('noaki', '', $S);
}
echo $S;
 ?>
