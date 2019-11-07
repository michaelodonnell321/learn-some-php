<?php
$odd_numbers = [1,3,5,7,9];
$first_odd = $odd_numbers[0];
$second_odd = $odd_numbers[1];

echo "The first number is $first_odd\n";
echo "Second number is $second_odd\n";

//length of array
echo $array_count = count($odd_numbers);
//push to add to end of array
array_push($odd_numbers, 11);
print_r($odd_numbers);
//pop to remove from end of array
array_pop($odd_numbers);
//11 is now removed
print_r($odd_numbers);
//unshift to add to beginning
array_unshift($odd_numbers, 0);
print_r($odd_numbers);
//shift to remove from beginning
array_shift($odd_numbers);
print_r($odd_numbers);
?>