<?php

// 1-е задание
// a
$tour_packeges = ['Hungary', 'Denmakr', 'Switzerland', 'Check', 'Poland', 'France', 'Italy', 'Greece', 'Netherlands', 'Germany'];

echo "<pre>";
echo print_r($tour_packeges);
echo "</pre>";
echo $tour_packeges[2];

// b
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

?>