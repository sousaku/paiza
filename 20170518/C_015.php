<?php
 function exploads($var) {
     $var = str_replace(array("\r\n","\r","\n"), '', $var);
     $var = explode(" ", $var);
     return $var;
 }

 function point($day, $var) {
     if (strpos($day, 3) != false) {
         $var = floor($var * 0.03);
     }
     else if (strpos($day, 5) != false) {
         $var = floor($var * 0.05);
     }
     else {
         $var = floor($var * 0.01);
     }
     return $var;
 }

 $N = trim(fgets(STDIN));
 $NUM = 0;

 for ($i = 0; $i < $N; $i++) {
     $d_n[$i] = exploads(trim(fgets(STDIN)));
     $NUM += point($d_n[$i][0], $d_n[$i][1]);
 }
 echo $NUM;
  ?>
