<?php
function theMultiplicator($numbers) {
    $value = 1;

    //multiplies numbers
    foreach ($numbers as $number) {
        $value *= $number;
    }

    //return the result
return $value;
}
?>