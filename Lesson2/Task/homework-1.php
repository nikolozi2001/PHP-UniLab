<?php
$employ = [
    'name' => 'jones',
    'position' => 'manager',
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
    <title>Task1</title>
</head>

<body>


    <!-- უზერი ინფო გამოტანეთ მასივიდან foreach ციკლის ის დახმარებით -->

    <!-- <h5>name: // # <?php echo $employ['name']; ?> </h5>
    <h5>position: <?= $employ['position'] ?> </h5> -->


    <?php foreach ($employ as $key => $value) {
        echo "<h4>Employ {$key}: $value</h4>";
    }
    ?>
    

</body>

</html>
