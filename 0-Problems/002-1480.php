<?php

function runningSum($nums)
{
    $array = [];
    $sum = 0;
    foreach ($nums as $num) {
        $sum += $num;
        array_push($array, $sum);
    }
    return $array;
}

echo '<pre>';
print_r(runningSum([1, 2, 3, 4]));
print_r(runningSum([1, 1, 1, 1, 1]));
print_r(runningSum([3, 1, 2, 10, 1]));

echo '</pre>';