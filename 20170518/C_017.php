<?php
function exploads($var) {
    $var = str_replace(array("\r\n","\r","\n"), '', $var);
    $var = explode(" ", $var);
    return $var;
}

function VS1($oya, $ko) {
    if ($ko < $oya) {
        $var = "kati";
    }
    else if ($ko == $oya) {
        $var = "hikiwake";
    }
    else {
        $var = "make";
    }
    return $var;
}

function VS2($oya, $ko) {
    if ($ko < $oya) {
        $var = "make";
    }
    else if ($ko == $oya) {
        $var = "hikiwake";
    }
    else {
        $var = "kati";
    }
    return $var;
}

$num = exploads(trim(fgets(STDIN)));
$N = trim(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    $a_n[$i] = exploads(trim(fgets(STDIN)));
}

for ($i = 0; $i < $N; $i++) {
    $syouhai = VS1($num[0], $a_n[$i][0]);
    $syouhai2 = VS2($num[1], $a_n[$i][1]);
        if ($syouhai == "kati") {
            echo "High" . "\n";
        }
        else if ($syouhai == "make") {
            echo "Low" . "\n";
        }
        else {
            if ($syouhai2 == "kati") {
                echo "High" . "\n";
            }
            else if ($syouhai2 == "make") {
                echo "Low" . "\n";
            }
        }
}
 ?>
