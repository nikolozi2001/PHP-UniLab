<?php


$employ1 = 'Nika';
$employ2 = 'Luka';


function calcEmploySalary($workingHours, $hourRate = 10,){
    return 40 * 4 * $hourRate;
}


$employ1Salary = calcEmploySalary(20, 10);
$employ2Salary = calcEmploySalary(40, 20);


function renderUserSalary($userName, $salary){
    echo "$userName shen gamoimushave $salary";
}


echo "$employ1 your salary is $employ1Salary";
echo '<br>';
echo "$employ2 your salary is $employ2Salary";
echo ' <br> ';
$employs = ['worker' => 'Nika', 'Luka', 'Mishiko'];
echo '<br>';
echo $employs[0];

foreach ($employs as $employ){
    echo $employ;
    echo '<br> <br>';
}

print_r($employs);