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

//array_merge to concatenate 2 arrays
$even_numbers = [2,4,6,8];
$all_numbers = array_merge($odd_numbers, $even_numbers);
print_r($all_numbers);
//sort to sort an array, rsort to sort in reverse
rsort($all_numbers);
sort($all_numbers);
print_r($all_numbers);

//array_slice returns a new array
//use second arg to start at that index
$some_numbers = [1,2,3,4,5,6,7,8];
print_r(array_slice($some_numbers, 4)); // this will start printing at index 4
//adding a 3rd arg will determine length of slice
$some_numbers = [1, 2, 3, 4, 5, 6, 7, 8];
print_r(array_slice($some_numbers, 4,2));
?>