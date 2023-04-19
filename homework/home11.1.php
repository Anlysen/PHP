<?php

echo "<h1>Homework- разкодировка файла</h1>" . "<hr>";





$locksmith =  '{"Okey Locksmith":"company","sector":"servise","url":"https://okeylocksmith.com/","include":["Change or Re-Key Locks",
    "Home Lockouts", "afe installation", "Install dead bolts", "Lock repairs"]}';

$locksmith_2 = json_decode($locksmith, true);
echo "<pre>";
print_r($locksmith_2);
echo "</pre>";
echo "<hr>";



?>