<?php
$d = 40;

if ($d >= 50) {
    echo "c";
} elseif ($d >= 75) {
    echo "b";
} elseif ($d >= 80) {
    echo "b+";
} elseif ($d >= 90) {
    echo "a";
} elseif ($d == 100) {
    echo "a+";
} else {
    echo "failed";
}