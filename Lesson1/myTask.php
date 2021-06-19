<?php


$students = [
    'Nika',
    'Luka',
    'Mari',
    'Nini'
];

$hours = [
    14,
    12,
    15,
    11
];

foreach ($students as $key => $studentsNames){
    echo $studentsNames . ' დასწრების საათების რაოდენობა არის ' . $hours[$key];
    echo '<br>';
}


// Task 2

$studentsInfo = [
    'Nika' => 14,
    'Luka' => 12,
    'Mari' => 15,
    'Nini' => 11
];

foreach ($studentsInfo as $studentsNames => $values){
    echo '<br>';
    echo $studentsNames . ' დასწრების საათების რაოდენობა არის ';
    echo $values;
}
