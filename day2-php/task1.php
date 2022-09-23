<?PHP

$person = [
    'fname' => 'Mahmoud',
    'lname' => 'Mohamed',
    'age' => 22,
    'city' => 'Alex'
];

foreach ($person as $k => $v) {
    echo $k . ' => ' . $v . '<br>';
}


// $keys = array_keys($person);
// $values = array_values($person);