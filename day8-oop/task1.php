<?php

class Calc
{
    public $num1;
    public $num2;

    function sum($num1, $num2)
    {
        return $num1 + $num2;
    }
    function sub($num1, $num2)
    {
        return $num1 - $num2;
    }
    function times($num1, $num2)
    {
        return $num1 * $num2;
    }
    function divided($num1, $num2)
    {
        return $num1 / $num2;
    }
}

$obj1 = new Calc;

echo $obj1->sum(1, 5) . '<br/> ';
echo $obj1->sub(1, 5) . '<br/> ';
echo $obj1->times(1, 5) . '<br/> ';
echo $obj1->divided(1, 5) . '<br/> ';