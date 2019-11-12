<?php
//for loop example, very simliar syntax to js
//this will print out each number from the list on a new line
$odd_numbers = [1,3,5,7,9];
for ($i = 0; $i < count($odd_numbers); $i=$i+1) {
    $odd_number = $odd_numbers[$i];
    echo $odd_number . "\n";
}

//for each is similar to js as well
//same thing, print out each number from list on a new line

foreach ($odd_numbers as $odd_number) {
    echo $odd_number . "\n";
}

//for arrays with keys, you can use the following syntax
//to print the key and the value on a new line
$phone_numbers = [
    "Michael" => "555-555-5555",
    "Carolyn" => "666-666-6666",
];

foreach ($phone_numbers as $name => $number) {
    echo "$name's number is $number.\n";
}
?>