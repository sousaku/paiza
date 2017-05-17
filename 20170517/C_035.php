<?php

$N = trim(fgets(STDIN));
$man = 0;

for ($i = 0; $i < $N; $i++) {
    $a = trim(fgets(STDIN));
    $a = str_replace(array("\r\n","\r","\n"), '', $a);
    $p[$i] = explode(" ", $a);
}

for ($i = 0; $i < $N; $i++) {
    $sum = 0;
    for ($j = 0; $j < count($p[$i])-1; $j++) {
        $sum += $p[$i][$j+1];
    }

    if ($sum >= 350) {
    //for ($j = 0; $j < count($p[$i])-1; $j++) {
        if ($p[$i][0] == "s") {
            if ($p[$i][2] + $p[$i][3] >= 160) {
                $man++;
            }
        }
        else if ($p[$i][0] == "l") {
            if ($p[$i][4] + $p[$i][5] >= 160) {
                $man++;
            }
        }
    }
    //}

}
echo $man;

 ?>
