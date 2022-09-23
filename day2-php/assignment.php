<?php
function numberOfSteps($num)
{
    $counter = 0;
    while ($num > 0) {
        if ($num % 2 == 0) {
            $num /= 2;
            $counter++;
        }
        if ($num % 2 != 0) {
            $num--;
            $counter++;
        }
    }
    return $counter;
}

echo '<pre>';

var_dump(numberOfSteps(14));
var_dump(numberOfSteps(8));
var_dump(numberOfSteps(123));

echo ' </pre>';