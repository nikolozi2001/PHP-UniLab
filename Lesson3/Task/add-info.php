<?php

include('./helpers.php');

// $_FILES - ინახება უზერის მიერ ატვირთული ფაილები მასივის ტიპის ცვლაიდ
//  $_POST  - ინახება უზერის მიერ შევსებული ინფოები ფომრიდან


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // FILE UPLOAD
    // $extension = pathinfo($_FILES["profile_pic"]['name'], PATHINFO_EXTENSION);
    // $fileName = rand(999, 9999999999999) . ".$extension";
    // $filePath =  'photos/' . $fileName;
    // move_uploaded_file(
    //     $_FILES['profile_pic']['tmp_name'],
    //     $filePath
    // );


    $users = getUsersInfoFromFile();


    $users[] = [
        'name' =>  $_POST['name'],
        'year' =>  $_POST['year'],
        
    ];

    

    $serilizedArray = serialize($users);
    file_put_contents('user.txt', $serilizedArray);
}else{
    echo 'form is not submited';
    die();
}


echo 'New information have been saved!';


?>

<br>
<button class="click"><a href="index.php">Go Back</a></button>
