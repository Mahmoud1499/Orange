<?php
function minOperations($s)
{
    $arr_s = str_split($s);
    // var_dump($arr_s);
    $n = count($arr_s);
    for ($i = 0; $i <= $n; $i++) {
        if ($s[$i] == $s[$i + 1]) {
            return 1;
        } else {
            return 0;
        }
    }
}

echo '<pre>';
var_dump(minOperations("0100"));
var_dump(minOperations("10"));
var_dump(minOperations("1111"));

echo '</pre>';
