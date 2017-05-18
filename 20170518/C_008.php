<?php
function exploads($var) {
    $var = str_replace(array("\r\n","\r","\n"), '', $var);
    $var = explode(" ", $var);
    return $var;
}

//$t = exploads(trim(fgets(STDIN)));
$t = exploads(trim("<abc> <xyz>"));
//$str = trim(fgets(STDIN));
$str = "<abc>123<abc>456<xyz>789<xyz>";

//preg_match("/$t[0](.+)$t[1]/", $str, $str_match1);
preg_match("/$t[1](.+)$t[0]/", $str, $str_match);
if (empty($str_match)) {
    preg_match("/$t[0](.+)$t[1]/", $str, $str_matchs);
}
else {
    preg_match("/$t[0](.+)$t[1]/", $str, $match);
    $del = explode("$str_match[1]", $match[0]);
    for ($i = 0; $i < count($del); $i++) {
        preg_match("/$t[0](.+)$t[1]/", $del[$i], $str_matchs[$i]);
    }
}
print_r($str_matchs);
for($i = 0; $i < count($str_matchs); $i++) {
    if (empty($str_matchs[$i])) {
        echo "<blank>" . "\n";
    }
    else {
        echo $str_matchs[$i][1] . "\n";
    }
}
 ?>
