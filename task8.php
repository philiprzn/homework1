<?php

$str = "Hello world 111 222 333 444 555";

echo $str . "<br>";

$array = explode(" ", $str);
echo '<pre>';
print_r($array);
echo '</pre>';

print_r($array) ;


$poped;
$newArr = [];
$count = 0;

$length = count($array);
echo $length . "<br>";


do {
    $poped = array_pop($array);
    array_push($newArr, $poped);
    $count++;
} while ($count < $length);
$newStr = implode("&#9733;", $newArr);

echo '<pre>';
print_r($newArr);
echo '</pre>';

echo "<br>" . $newStr;
echo "<br><br>";
?>