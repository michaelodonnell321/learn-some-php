<?php
//php arrays are ordered maps, meaning all values have keys
//and items inside will stay in order.
//With no keys, 0,1,2 etc will be used
//Here is an example with keys, a phonebook:
$phone_numbers = [
"Alex" => "415-235-8573",
"Jessica" => "415-492-4856",
];

print_r($phone_numbers);
echo "Alex's phone number is " . $phone_numbers["Alex"] . "\n";
echo "Jessica's phone number is " . $phone_numbers["Jessica"] . "\n";

//we can add an item to an array using a key
$phone_numbers["Mike"] = "555-555-5555";
print_r($phone_numbers);
//array_key_exists is a function to check a key in an array
//using an if statement
if (array_key_exists("Mike", $phone_numbers)) {
    echo "Mike's phone number is " . $phone_numbers["Mike"] . "\n";
} else {
    echo "Mike's phone number isn't in the book.";
}

//showing a number that isn't in the book
if (array_key_exists("George", $phone_numbers)) {
    echo "George's phone number is " . $phone_numbers["Goerge"] . "\n";
} else {
    echo "George's phone number isn't in the book.";
}

//to extract the keys(names in this case), array_keys function
print_r(array_keys($phone_numbers));

//to get only the values, use array_values
print_r(array_values($phone_numbers));
?>