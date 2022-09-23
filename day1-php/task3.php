<?Php
$person = ['Mahmoud', 22, 'Alexandria'];

foreach ($person as $p) {
    echo $p . "<br>";
}

echo 'OR <br>';

for ($i = 0; $i < count($person); $i++) {
    echo $person[$i] . '<br>';
}
