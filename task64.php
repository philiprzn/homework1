<?php

//Создаем многомерный числовой (индексный) массив
 $arr1 = array(
     array(
         'KIA',
         'BMW',
         'MAZDA',
         'OPEL'
     ),
     array(
         'Красная',
         'Зеленая',
         'Черная'
     )
 );
//Создаем многомерный комбенированый массив
$arr2 = array(
    'Авто' => array(
        'KIA',
        'BMW',
        'MAZDA',
        'OPEL'
    ),
    'Краска' => array(
        'Красная',
        'Зеленая',
        'Черная'
    )
);

 //Разбираем многомерный индексный массив
 echo '<ul>';
 //Прогоняем циклом по первой ветки массива
 for($i = 0; $i < count($arr1); $i++)
 {
     echo '<li>'. $i .'</li><ul>';
     //Вспомогательный цикл для прохождения по
     //данным из верхнего массива
     for($j = 0; $j < count($arr1[$i]); $j++)
     {
         echo '<li>'. $arr1[$i][$j] .'</li>';
     }
     echo '</ul>';
 }
 echo '</ul>';

  //Разбираем многомерный комбенированного массива
  echo '<ul>';
 //Прогоняем циклом по первой ветки массива
 foreach($arr2 as $key => $val)
 {
     echo '<li>'. $key .'</li><ul>';
     //Вспомогательный цикл для прохождения по
     //данным из верхнего массива
     for($j = 0; $j < count($val); $j++)
     {
         echo '<li>'. $val[$j] .'</li>';
     }
     echo '</ul>';
 }
 echo '</ul>';

?>