<?php

$p = trim(fgets(STDIN));
$p = str_replace(array("\r\n","\r","\n"), '', $p);
$p = explode(" ", $p);

for ($i = 0; $i < $p[0]; $i++) {
    $m[$i] = trim(fgets(STDIN));
    $m_i[$i] = $p[1] % $m[$i];
}

for ($i = 0; $i < count($m_i)-1; $i++) {
    for ($j = 0; $j < count($m_i)-$i; $j++) {
        if ($m_i[$i] <= $m_i[$j]) {
            if ($m_i[$i] == $m_i[$j]) {
                if ($p[1] / $m[$i] < $p[1] / $m[$j]) {
                    $kotae = $p[1] / $m[$j];
                }
                else {
                    $kotae = $p[1] / $m[$i];
                }
            }
            else {
                $kotae = $p[1] / $m[$i];
            }
        }

        else if ($m_i[$i] >= $m_i[$j]) {
            if ($m_i[$i] == $m_i[$j]) {
                if ($p[1] / $m[$i] < $p[1] / $m[$j]) {
                    $kotae = $p[1] / $m[$j];
                }
                else {
                    $kotae = $p[1] / $m[$i];
                }
            }
        }
    }
}

 ?>
