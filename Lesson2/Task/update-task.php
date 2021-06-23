<?php

//echo 'Your information succesfully submited';


if (isset($_GET['name']) && isset($_GET['position'])) {

    $fileText = "UserName: {$_GET['name']}, position: {$_GET['position']}";

    file_put_contents('file_name.txt', $fileText);

    echo 'Hello, ' . $_GET['name'] . ' your position is ' . $_GET['position'];




}

?>