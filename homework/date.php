<?php

// Функции даты и времени
$date_2020 = mktime(12, 12, 12, 4, 7, 2020); // Выводит время в секундах от 1970 года до указаной даты 2020 года
echo $date_2020 . "<br>"; // В скобках написан месяц, день, год

echo date('H:i:s d.m.Y') . "<br>"; // Показывает текущую дату
echo date('H:i:s d.m.Y', $date_2020) . "<br>"; // Покажет дату, которая в переменной $date_2020





// Количество прожитых дней с даты рождения по текщую дату
$my_bithday = mktime(10, 10, 10, 2, 3, 1993);
$days = floor((time() - $my_bithday) / 60 / 60 / 24);

/* floor округляет число, 60 сукунд делим на 60 минут и делим на 24 часа,
выдаст количество дней, без деления эта функция выдаст количество секунд */

echo "Я прожил $days дней <br>";





// Пример с strtotime
$day_m = strtotime('next Monday'); // В переменной содержится следующий понедельник
echo "Следующий понедельник будет :", date('d-m-Y', $day_m) . "<br>";
// Результат покажет, какое число будет в следующий понедельник





// Функция с временем
$date_time = new DateTime('2023-3-10'); // В переменной создаем функцию с датой
$date_time -> modify('-2 days'); // Обращаем переменную к функции, где отнимаем 2 дня
echo $date_time -> format('d.m.Y') . "<br>"; // Выводим результат с использованием формата нашей даты




// Определение времени работы скрипта
$start = microtime(true);
$c = 1;
for ($i = 0; $i <= 1000000; $i++) {
    $c *= $i;
}
$end = microtime(true);
$sec = $end - $start;
// echo "Время работы скрипта: $sec <br>"; // Показывет время работы скрипта:  0.030449151992798




// Проверка на корректность даты
// echo checkdate(12,4,1999);



// Создаем сдвиг времени от GMT+0
function GMT($time) {
    $offset = date('z', $time); // Здесь мы добовляем порядковый номер дня "z" в переменную $time
    return $time - $offset; // 3600 секунд в часе
}
echo time() . "<br>";
echo GMT(time()) . "<br>";
echo date("H:i:s", GMT(time())) . "<br>";




// Функция которая показывает время в New-York
function GMT_NY($offset) {
    $result = (GMT(time()) + ($offset * 3600));
    $time = date('H:i:s', $result);
    return $time;
} 
echo "Время в Нью-Йорке GMT-4: ", GMT_NY(-5);




// Сколько часов осталось до нового года
function NewYear() {
    $newYear = mktime(0, 0, 0, 1, 1, 2024);
    $time_to_ny = $newYear - time();
    $hours_to_ny = floor($time_to_ny % (3600 * 24) / 3600);
    return $hours_to_ny;
}
echo NewYear();
//echo "До нового года осталось: $hours_to_ny часов";





?>