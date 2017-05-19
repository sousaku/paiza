<?php
function exploads($var) {
    $var = str_replace(array("\r\n","\r","\n"), '', $var);
    $var = explode(" ", $var);
    return $var;
}

$kg = exploads(trim(fgets(STDIN)));
for ($i = 0; $i < count($kg) - 1; $i++) {
    $kg[$i + 1] = $kg[0] * ($kg[$i + 1] * 0.01);
    $kg[0] = $kg[0] - $kg[$i + 1];
}
echo $kg[0]
 ?>
