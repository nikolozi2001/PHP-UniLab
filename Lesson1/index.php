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
    $hurs = $hours[$key];
    echo $studentsNames;
    echo '<br>';
}

// Task 2

$studentsInfo = [
    'Nika' => 14,
    'Luka' => 12,
    'Mari' => 15,
    'Nini' => 11
];

foreach ($students as $studentsNames => $hours){
    echo $students;
}