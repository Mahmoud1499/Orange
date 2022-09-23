<?php
function twoSum($nums, $target)
{

    for ($i = 0; $i < count($nums); $i++) {
        for ($j = 1; $j < count($nums); $j++) {
            // echo $nums[$i] + $nums[$j] . '<br>';
            if ($i == $j) {
                break;
            } else   if ($nums[$i] +  $nums[$j] == $target) {
                return array($i, $j);
            }
        }
    };
}

echo 'Example 1 <br>';
var_dump(twoSum([2, 7, 11, 15], 9));

echo 'Example 2 <br>';
twoSum([3, 2, 4], 6);

echo 'Example 3 <br>';
twoSum([3, 3], 6);