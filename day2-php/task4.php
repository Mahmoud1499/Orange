<?php

function fizzBuzz($n)
{
    $numbers = [];
    for ($i = 1; $i <= $n; $i++) {
        array_push($numbers, $i);
    };
    // var_dump($numbers);

    $res_arr = [];

    foreach ($numbers as $num)
        if ($num % 3 == 0 && $num % 5 == 0) {
            array_push($res_arr, 'FizzBuzz');
        } else  if ($num % 3 == 0) {
            array_push($res_arr, 'Fizz');
        } else if ($num % 5 == 0) {
            array_push($res_arr, 'Buzz');
        } else {
            array_push($res_arr, "$num");
        }



    return $res_arr;
}

echo '<pre>';
var_dump(fizzBuzz(3));
var_dump(fizzBuzz(5));
var_dump(fizzBuzz(15));


echo ' </pre>';
