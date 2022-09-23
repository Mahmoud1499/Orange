<?php
$l = 30;
$oil = 95;

switch ($oil) {
    case 80:
        echo $l * 3;
        break;
    case 90:
        echo $l * 2;
        break;
    case 95:
        echo $l * 5;
        break;
    default:
        echo "Not Found";
};

if ($l >= 50) {
    echo "aa";
};