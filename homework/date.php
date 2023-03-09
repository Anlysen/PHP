<?php

$date_2020 = mktime(12, 12, 12, 4, 7, 2020); // Выводит время в секундах от 1970 года до указаной даты 2020 года
echo $date_2020 . "<br>"; // В скобках написан месяц, день, год

echo date('H:i:s d.m.Y') . "<br>"; // Показывает текущую дату
echo date('H:i:s d.m.Y', $date_2020) . "<br>"; // Покажет дату, которая в переменной $date_2020

// Количество прожитых дней с даты рождения по тнекщую дату
$my_bithday = mktime(10, 10, 10, 2, 3, 1993);
$days = floor((time() - $my_bithday) / 60 / 60 / 24);

/* floor округляет число, 60 сукунд делим на 60 минут и делим на 24 часа,
выдаст количество дней, без деления эта функция выдаст количество секунд */

echo "Я прожил $days дней <br>";

?>