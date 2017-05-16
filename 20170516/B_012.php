<?php

$s = trim(fgets(STDIN));
$check = "";

for ($n = 0; $n < $s; $n++) {
    $a[$n] = trim(fgets(STDIN));
}

for ($N = 0; $N < $s; $N++) {

// 文字列を配列に分解
$card = str_split($a[$N]);

for ( $i = 0; $i < 15; $i++ ) {
    if ($card[$i]) {
        // 偶数桁の場合、奇数の場合のみ2倍する
        if ($i % 2 == 0) {
            $card[$i] = $card[$i] * 2;
        }
        // 2桁の場合は分割して足す
        if ( mb_strlen( $card[$i]) != 1 ) {
            $split = str_split($card[$i]);
            $card[$i] = $split[0] + $split[1];
        }
        $check += $card[$i];
    }
}

if ( $check % 10 == 0 ) {
    echo $check / 10 . "\n";
    $check = 0;
}
else {
    echo $check / 10 . "\n";
    $check = 0;
}

}
