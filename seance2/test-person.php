<?php
require_once('classes/Person.php');

$peter  = new Person;

// $peter->name = 'Peter';
// $peter->address = 'Pie IX';
// $peter->zipCode = 'h2h2h2';

// echo $peter->name;


// $peter->setName('Paul');

// echo $peter->getName();

$peter->setProps('Peter', 'Pie IX', '555-4444444');

echo $peter->getMessage();
echo "<br><br>";

$lisa = new Person;
$lisa->setProps('Lisa', 'Sherbrooke', '555-7777777');
echo $lisa->getMessage();

echo "<br><br>";
var_dump($peter);
echo "<br><br>";
print_r($peter);
echo "<br><br>";





?>