<?php
define("TestConst","Это тестовая константа", true);
if (defined("TestConst") == true)
    echo "Константа TestConst объявлена" . "<br>";
echo TestConst . "<br>";


define("TestConst","Это измененная тестовая константа", true);
echo TestConst . "<br>";

if (defined("TestConst") == "Это измененная тестовая константа")
    echo "Константа TestConst изменена и объявлена" . "<br>";
