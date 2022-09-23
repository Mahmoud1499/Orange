<?php
$numbers = [1, 4, 5, 2, 11, 6, 10];
$target = 12;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $target) {
        echo $target;
    } elseif ($numbers[$i] != $target) {
        echo 'Not found';
        break;
    }
}