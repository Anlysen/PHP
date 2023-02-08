<?php

// 1-е задание
$tour_packeges = ['Hungary', 'Denmakr', 'Switzerland', 'Check', 'Poland', 'France', 'Italy', 'Greece', 'Netherlands', 'Germany'];

for ($i = 0; $i < count($tour_packeges); $i++) {
    echo $tour_packeges[$i] . "<br>";
}

$sells = ['January' => 100, 'February' => 200, 'March' => 500, 'April' => 550, 'May' => 600, 'June' => 680, 'July' => 700, 'August' => 750, 'September' => 800, 'October' => 900];

foreach ($sells as $key => $val) {
    echo $key . "-" . $val . "<br>";
}

foreach ($sells as $val) { // Выводит только значение массивов
    echo $val . "<br>";
}


// 2-е задание
$technique = [
    'car' => ['audi', 'volvo', 'dodge'],
    'plane' => ['boing', 'mig-27', 'stels'],
    'ship' => ['submarine', 'submarine', 'sailboat']
];

foreach ($technique as $array) {
    //echo "<b>$key</b><br>";
        foreach ($array as $value) {
            echo "<li>$value</li>";
    }
}

?>