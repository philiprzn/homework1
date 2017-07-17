<?php
$total_pic = 80;
$marker_pic = 23;
$pencil_pic = 40;
$paint_pic =  $total_pic - $marker_pic - $pencil_pic;

echo "Общее количество рисунков: $total_pic" . "<br>";
echo "Количество рисунков фломастерами: $marker_pic" . "<br>";
echo "Количество рисунков карандашами: $pencil_pic" . "<br>";
echo "Общее количество рисунков = Количество рисунков фломастерами - Количество рисунков карандашами = $total_pic - $marker_pic - $pencil_pic" . "<br>";

echo "Количество рисунков красками: $paint_pic" . "<br>";



