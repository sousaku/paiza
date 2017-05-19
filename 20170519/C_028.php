<?php
function exploads($var) {
    $var = str_replace(array("\r\n","\r","\n"), '', $var);
    $var = explode(" ", $var);
    return $var;
}

function saiten($array) {
    $point = 0;
    $num = 0;
    for ($i = 0; $i < count($array); $i++) {
        // $seikai[$i] =  str_split($array[$i][0]);
        // $kaitou[$i] =  str_split($array[$i][1]);

        if (count($seikai[$i]) == count($kaitou[$i])) {

            for ($j = 0; $j < count($kaitou[$i]); $j++) {
                for ($k = 0; $k < count($kaitou[$i]); $k++) {
                    if ($seikai[$j][$k] == $kaitou[$j][$k]) {
                        $num++;
                    }
                    else if ($seikai[$j] != $kaitou[$k]) {
                        $num--;
                    }

                }
                if (count($kaitou[$j]) == $num) {
                    $point = $point + 2;
                }
                else if (count($kaitou[$j]) - 1 == $num) {
                    $point = $point + 1;
                }
            }
        }
        // $seikai = NULL;
        // $kaitou = NULL;
    }
    return $point;
}

$N = exploads(trim(fgets(STDIN)));

for ($i = 1; $i <= $N[0]; $i++) {
    $q_N[$i] = exploads(trim(fgets(STDIN)));
}

echo saiten($q_N);
 ?>
