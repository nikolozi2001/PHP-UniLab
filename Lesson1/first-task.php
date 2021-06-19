<!DOCTYPE html>
<html>
<body>

<?php
echo "<h1>To find arithmetic average </h1><hr/>";
// პირველ რიგში გამოვითვლით ჯამს და გავყოფთ რაოდენობაზე ანუ გავიგებთ საშუალოს
$a = array (1, 1, 3, 9, 5, 7, 4, 5, 6, 4);

echo array_sum($a)/count($a);

//შემდეგ მოვახდენთ სორტირებას და შესაბამისად რიცხვები დალაგდება ზრდის მიხედვით და შუა რიცხვებს შევკრებთ და გავყოფთ 2ზე ანუ გავიგებთ მედიანას
sort(array)

$middleval = floor(($count-1)/2); // ვიპოვოთ შუა რიცხვი
    if($count % 2) { // კენტი რიცხვისთვის
        $median = $arr[$middleval];
    } else { // ლუწი რიცხვისთვის
        $low = $arr[$middleval];
        $high = $arr[$middleval+1];
        $median = (($low+$high)/2);
    }
    return $median;

// შემდეგ კი ვიპოვით ყველაზე მეტჯერ გამოყენებად რიცხვს ანუ გავიგებთ მოდას

$counts = array_count_values($array);
arsort($counts);


?> 

</body>
</html>
