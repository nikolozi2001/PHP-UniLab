<?php


$numArrays = [1, 2, 3, 4, 5, 6];


// მასივის ყველა ელემენტის მნიშვნელობა გააორმაგეთ
foreach ($numArrays as $k => $number){

}


// დაბეჭდეთ ეკრანზე მხოლოდ ლუწი რიცხვები მოცეუმლი მასივიდან
foreach ($numArrays as $number){
  if ($number % 2 == 0) {
    echo "It's even";
  }
}


// შექმენით ფუნქცია რომელიც მიიღებს ორ პარამეტრს მასივს და keys 
// მოცემულ ქიზე თუ არ არსებობს ჩანაწერი წაშლის და დააბრუნებს ახალ მასივს
// თუ არ არსებობს დაარბუნებს false-ს
function deleteItem($array, $key){
  if(isset($array[$key])){
    unset ($array[$key]);
    return $array;
  }else{
    return false;
  }
}



// დაწერეთ ფუნქცია რომელიც პირველ პარამეტრად მიიღებს რიცხვების მასივს და მეორე პარამეტრად რიცხვს
// ფუქნციამ უნდა წაშალოს ყველა რიცხვი მასივიდან რომელიც ზუსტად 
// არ გაიყოფა მეორე გამოდმოცემულ პარამეტრზე
