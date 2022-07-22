<?php

require('./helpers.php');

$users = getUsersInfoFromFile();
$key = $_POST['key'];
unset($users['key']);

$users = array_values($users);

file_put_contents('user.txt', serialize($users));


?>