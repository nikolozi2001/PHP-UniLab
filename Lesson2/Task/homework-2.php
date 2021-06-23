<?php

//  ამ ნაწილში წერთ შემოწმებას თუ ფორმა არის დასაბიმთებული და $_GET მასივის 
// ტიპის ცვლადიში გვაქვს ჩანაწერი იმ key-ზე რაც ფორმაში შეაყვანინეთ უზერს
//  <input  name='value' /> 
// input თაგში name-ის value რასაც უდრის იმ KEY-ზე გვენახება $_GET ცვალდში უზერის მიერ შეყვანილი ინფო
// რომ გაიგოთ რა ინფო არის $_GET ცვლადშ დასატესტად გამოიყენოთ
//echo var_dump($_GET);
// ან
//echo print_r($_GET);


// თუ ფორმა არი დასაბიმთებული და $_GET მასივში გაქვთ ველიუბი რაც უზერმა შეიყვანა 
// ეს ინფო გამოიტანეთ ეკრანზე
// და ასევე შეინახეთ ფაილში 
// მაგალით გაქვს ძალიან(თითქმის იგივეა რაც გაკვითლზე გავაკეთეთ) და რეფერენსად გამიყენოთ შეგიძლიათ არსებული კოდი

if (isset($_GET['name']) && isset($_GET['position'])) {
    $fileText = "UserName: {$_GET['name']}, position: {$_GET['position']}";
    file_put_contents('file_name.txt', $fileText);
    echo 'Hello, ' . $_GET['name'] . ' your position is ' . $_GET['position'];

    
}

$employ = [
    'name' => 'Nika',
    'position' => 'developer',
    'salary' => 1400,
    'currency' => 'gel'
];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2</title>
</head>

<body>


    <!-- შექმენით html ფორმა სადაც მომხმარებელს შეაყვანინებთ თქვენს მიერ არჩეულ ინფოს -->
    <!-- და ასევე გექნებათ დასაბიმთების ანუ ფორმის გაგზავნის ღილაკი  -->
    <form method="GET" action="update-task.php">
        Name:
        <input require type="text" name="name" placeholder="name" value="<?= $employ['name'] ?>">
        <br />
        Position:
        <input require type="text" name="position" placeholder="position" value="<?php echo $employ['position'] ?>">
        <br>
        <button> Send </button>
    </form>

</body>

</html>
