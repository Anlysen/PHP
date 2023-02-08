<?php

// 1-е задание 
// a (индексный массив)
$tour_packeges = ['Hungary', 'Denmakr', 'Switzerland', 'Check', 'Poland', 'France', 'Italy', 'Greece', 'Netherlands', 'Germany'];

echo "<pre>";
echo print_r($tour_packeges);
echo "</pre>";
echo $tour_packeges[2];

// b (ассоциативный массив)
$sells = ['January' => 100, 'February' => 200, 'March' => 500, 'April' => 550, 'May' => 600, 'June' => 680, 'July' => 700, 'August' => 750, 'September' => 800, 'October' => 900];

echo "<pre>";
echo print_r($sells);
echo "</pre>";
echo $sells['September'];

// 2-е задание
$date = [
    'Year' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Decrmber'],
    'Week' => ['Monday' => 1, 'Tuesday' => 2, 'Wednesday' => 3, 'Thursday' => 'Thursday', 'Friday' => 5, 'Saturday' => 6, 'Sunday' => 7]
];

// 3-е задание
echo "<br>";
echo $date['Year'][4];

echo "<pre>";
print_r($date);
echo "</pre>";

// 4-е задание
echo "Next summer we're gonna travel to $tour_packeges[4]" . "<br>";
echo "It's 10 of {$date['Year'][8]} now" . "<br>";
echo "Tomorrow is {$date['Week']['Thursday']}";

// 5-е задание (ассоциативный массив)
$cars = [
    'BMW' => ['year' => 2006, 'price' => 1000],
    'Mersedes' => ['year' => 2015, 'price' => 2000],
    'Opel' => ['year' => 2020, 'price' => 5000],
    'Audi' => ['year' => 2022, 'price' => 10000]
];
echo "<br>";

echo "<pre>";
print_r($cars);
echo "</pre>";

echo $cars['Mersedes']['price'];
echo $cars['Audi']['year'];
echo "<br>";
echo "I bought a new {$cars['Audi']['year']} Audi for $10000";

?>