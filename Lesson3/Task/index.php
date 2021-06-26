<?php
require('./helpers.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="main">

    <?php $users = getUsersInfoFromFile();  ?>
    

    <?php foreach ($users as $user) : ?>
        <h3>
            <?= $user['name'] ?>
            <br>
            <?= $user['year'] ?>
        </h3>
    

    <?php endforeach; ?>
    



    <h2>Add new information in database</h2>
    
    <form action="add-info.php" method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="A historical event" name="name">
        <br>

        <input type="number" placeholder="year" name="year">
        <br>

        

        <button class="click">send</button>
    </form>


</body>

</html>
