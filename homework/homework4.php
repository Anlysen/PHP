<?php

$y = 2;

// 1-й цикл

while ($y <= 15) {
    echo "$y<br>";
    $y++;
    if ($y % 2 == 0) {
        echo "<p>Число: $y четное</p>";
    } else {
        echo "<p>Число: $y не четное</p>";
    }
}
echo 7 % 2;

// 2-й цикл
/*
while (true) {
    $y++;
    if ($y > 40) break;
    echo "$y<br>";
}
*/

// 3-й цикл
/*
while ($y--) {
    echo "$y<br>";
}
*/

?>