<?php


$one = 0;
$two = 1;

for ($i = 0; $i <= 200; $i++) {
    $count = $one + $two;
    $two = $one;
    $one = $count;
    echo $count . '<br>';
}

for ($x = 1; $x <= 20; $x++) {
    echo $x . '<br>';
}


$y = 1;
for (;;) {
    $y++;
    if ($y > 15) break;
    echo $y . '<br>';
}

for ($z = 2; $z <= 10; $z += 20) {
    echo $z . '<br>';
}

?>