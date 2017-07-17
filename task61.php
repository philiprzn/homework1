<?php
//$house = array('Иванов', 'Петров', 'Сидоров');
//echo $house . '<br>';
//
//echo '<pre>';
//print_r($house);
//echo '</pre>';
//
//echo $house[1];

//$house = array(5 => 'Иванов', 'Петров', 'Сидоров');
//
//echo '<pre>';
//print_r($house);
//echo '</pre>';


//      Ассоциативные массивы

//$house = array('Иван' => 'Иванов', 'Петр' => 'Петров', 'Сидор' => 'Сидоров');
//
//echo '<pre>';
//print_r($house);
//echo '</pre>';
//
//foreach($house as $elem) echo "$elem ";
//
//echo  '<br>' . $house['Петр'];


//       Многомерные массивы

$arr = array(1, 3, 'sring' => array(4, 5), 7);

echo '<pre>';
print_r($arr);
echo '</pre>';

echo $arr[2][1];