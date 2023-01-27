<?php

$y = 29;

// 1-й цикл
/*
while ($y <= 40) {
    echo "$y<br>";
    $y++;
    if ($y % 4) {
        echo "<p>Содержит парное число</p>";
    }
}
*/


// 2-й цикл

while (true) {
    $y++;
    if ($y > 40) break;
    echo "$y<br>";
    if ($y % 9) {
        echo "<p>Содержит не парное число</p>";
    }
}


// 3-й цикл
/*
while ($y--) {
    echo "$y<br>";
}
*/

?>