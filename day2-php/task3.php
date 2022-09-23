<?php

function maximumWealth($accounts)
{
    $max = 0;
    foreach ($accounts as $account) {
        $sum = 0;
        foreach ($account as $number) {
            $sum += $number;
        }
        // var_dump($sum);
        if ($sum > $max) {
            $max = $sum;
        }
        // var_dump($max);
    }
    return $max;
};

echo maximumWealth([
    [123, 231, 4],
    [1, 6, 2],
    [654, 23, 8]
]);