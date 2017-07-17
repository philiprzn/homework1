<?php

/* $bmw["model"] = "X5";
$bmw["speed"] = "120";
$bmw["doors"] = "5";
$bmw["year"] = "2015";

foreach($bmw as $elem) echo "$elem"; */


//$bmw = array('X5', '120', '5', '2015');
//echo $bmw . '<br>';
//foreach($bmw as $elem) echo "$elem" . '<br>';


$bmw = array('model' => 'X5', 'speed' => '120', 'doors' => '5', 'year' => '2015');

$toyota = array('model' => 'LandCruiser', 'speed' => '80', 'doors' => '5', 'year' => '1976');
$opel = array('model' => 'Astra', 'speed' => '100', 'doors' => '5', 'year' => '2007');

//
//
//echo '<pre>';
//print_r($bmw);
//echo '</pre>';
//
//echo '<pre>';
//print_r($toyota);
//echo '</pre>';
//
//echo '<pre>';
//print_r($opel);
//echo '</pre>';
//
//foreach($bmw as $elem) echo "$elem ";
//echo '<br>';
//foreach($toyota as $elem) echo "$elem ";
//echo '<br>';
//foreach($opel as $elem) echo "$elem ";
//
////$cars =

$cars = array(
    "BMW" => $bmw,
    "Toyota" => $toyota,
    "Opel" => $opel
);



//$cars["BMW"] = array("model" => "X5", "speed" =>
//    "120", "doors" => "5", "year" =>
//    "2015");
//$cars["Toyota"] = array("model" => "LandCruiser", "speed" =>
//    "80", "doors" => "3", "year" =>
//    "1976");
//$cars["Opel"] = array("model" => "Astra", "speed" =>
//    "100", "doors" => "5", "year" =>
//    "2007");

echo '<pre>';
print_r($cars);
echo '</pre>';

echo $cars;
echo '<br>';

//foreach ($array as $key => $value) {}
foreach ($cars as $key => $value) {
    echo  "<dt>CAR $key:</dt>";
    foreach($bmw as $elem) echo "$elem ";
}