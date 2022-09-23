<?php

$numbers = [1, 4, 5, 2, 11, 6, 10];
$max = $numbers[0];

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] > $max) {
        $max = $numbers[$i];
    }
}
echo $max;