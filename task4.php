<?php
$age = mt_rand(0, 150);


echo "Ваш возраст: $age" . "<br>";

if ($age > 0 and $age < 18) echo "Вам еще рано на работу, но для опыта можно!";
    elseif ($age >= 18 and $age <= 65) echo "Вам еще работать и работать...";
    elseif ($age > 65 and $age <= 100) echo "Деда";
    elseif ($age > 100 and $age < 150) echo "Неизвестный возраст";
