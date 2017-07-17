<?php

$str = "String variable";
$str2 = "Hello world 12345 67890";


echo $str . "<br>";
echo $str . "<br>";

$array = str_split($str);
$array2 = str_split($str, 2);
$array3 = str_split($str2, 6);


echo '<pre>';
print_r($array);
echo '</pre>';

echo '<pre>';
print_r($array3);
echo '</pre>';

echo '<pre>';
print_r($array2);
echo '</pre>';

$string = implode(", ", $array);
echo $string . "<br>";

$length = count($array);
echo "Длинна массива " . $length . " cимволов" . "<br>";


while ($lengt-- < 0) echo $lengt;