<?php

$bmw = array(
    'model' => 'X5',
    'speed' => '120',
    'doors' => '5',
    'year' => '2015');

$toyota = array(
    'model' => 'LandCruiser',
    'speed' => '80',
    'doors' => '5',
    'year' => '1976');

$opel = array(
    'model' => 'Astra',
    'speed' => '100',
    'doors' => '5',
    'year' => '2007');

echo '<pre>';
print_r($bmw);
echo '</pre>';

echo '<pre>';
print_r($toyota);
echo '</pre>';

echo '<pre>';
print_r($opel);
echo '</pre>';


$cars = array(
    "BMW" => $bmw,
    "Toyota" => $toyota,
    "Opel" => $opel
);

echo '<table rules="all" border ="2" cellpadding="20" > ';

foreach ($cars as $key => $value) {
    echo "<tr><td>";
    echo  "<dt>CAR $key:</dt>";
    foreach($value as $elem) echo "$elem ";
    echo "</td></tr>";
}