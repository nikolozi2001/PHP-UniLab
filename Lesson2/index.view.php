<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="/PHP-UniLab/Lesson2/update-employ.php">
        Name:
        <input type="text" name="name" value="<?= $employ['name'] ?>">

        Position:
        <input type="text" name="position" value="<?php echo $employ['possition'] ?>">


        <button type="submit">send </button>
    </form>

    <h1>Employ name</h1>
    <?php echo $employ['name']; ?>

    <?php foreach ($employ as $key => $value) {
        echo "<h2> Employ {$key} </h2>";
        echo $value;
    }
    ?>
</body>
</html>