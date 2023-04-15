<?php

$school = [
    '1-class' => ['Quentin Simson', 'July Stevens', 'Alex Fisher', 'Courtney Summers', 'Charlotte Linkoln', 'Alan Perish', 'Sophie Brown', 'Louse Binsky', 'Oscar Paddington', 'Richard Stanley'],
    '2-class' => ['Quentin Simson', 'July Stevens', 'Alex Fisher', 'Courtney Summers', 'Charlotte Linkoln', 'Alan Perish', 'Sophie Brown', 'Louse Binsky', 'Oscar Paddington', 'Richard Stanley'],
    '3-class' => ['Quentin Simson', 'July Stevens', 'Alex Fisher', 'Courtney Summers', 'Charlotte Linkoln', 'Alan Perish', 'Sophie Brown', 'Louse Binsky', 'Oscar Paddington', 'Richard Stanley'],
    '4-class' => ['Quentin Simson', 'July Stevens', 'Alex Fisher', 'Courtney Summers', 'Charlotte Linkoln', 'Alan Perish', 'Sophie Brown', 'Louse Binsky', 'Oscar Paddington', 'Richard Stanley'],
    '5-class' => ['Quentin Simson', 'July Stevens', 'Alex Fisher', 'Courtney Summers', 'Charlotte Linkoln', 'Alan Perish', 'Sophie Brown', 'Louse Binsky', 'Oscar Paddington', 'Richard Stanley']
];
foreach ($school as $key)  {
    $str_school = implode(';', $school['2-class']);
    echo $str_school . "<br>";
}

//$str_school = implode(';', $scool['1-class']);
//echo $str_school . "<br>";
// 
// $str_school = implode(';', $scool['2-class']);
// echo $str_school . "<br>";
// 
// $str_school = implode(';', $scool['3-class']);
// echo $str_school . "<br>";
// 
// $str_school = implode(';', $scool['4-class']);
// echo $str_school . "<br>";
// 
// $str_school = implode(';', $scool['5-class']);
// echo $str_school . "<br>";





?>