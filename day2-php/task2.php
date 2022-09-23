<?php

$persons = [
    [
        "name" => "Mohamed",
        "age" => 20
    ],
    [
        "name" => "Eslam",
        "age" => 30
    ],
    [
        "name" => "Radwa",
        "age" => 10
    ]
];

foreach ($persons as $person) {
    echo 'Name :' . $person['name'] . '<br>';
    echo 'Age :' . $person['age'] . '<br>';
    echo  '------------------------<br>';
}

echo 'OR <br>';

$arr_count = count($persons);

foreach ($persons as $person) {
    foreach ($person as $k => $v) {
        echo $k . ' :' . $v . '<br>';
        // echo $k . ':' . $v . '<br>';
    }
    echo  '<hr>';
}