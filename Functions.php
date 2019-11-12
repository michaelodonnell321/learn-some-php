<?php

/*
Functions are simple code blocks we can call from anywhere. For example, we can create a function that sums a list of numbers and returns the result. Let's call this function sum.
There are two types of functions - library functions and user functions. Library functions, such as array_push are part of the PHP library and can be used by anyone. However, you may write your own functions and use them across your code.
A function receives a list of arguments separated by commas. Every argument only exists in the context of the function, meaning that they become variables inside the function block, but are not defined outside of that function block.
*/

function theAddinator($numbers) {
    $sum = 0;

    //addinates numbers
    foreach ($numbers as $number) {
        $sum += $number;
    }

    //return the sum
    return $sum;
}

//use it!
echo theAddinator([1,2,3,4])."\n";
//can use functions from other files as well
include ('Multiplicator.php');

echo theMultiplicator([1,2,3,4]);
?>