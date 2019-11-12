<?php
//while loops look similar to js as well

$counter = 0;

while ($counter < 5) {
    $counter +=1;
    echo "Executing: counter is $counter.\n";
}

//loops are controllable via break and continue
//break stops the loops immediately
//countine returns to the top of hte loop and re-checks the condition

$counterTwo = 0;

while ($counterTwo < 20) {
    $counterTwo += 1;

    if ($counterTwo % 2 == 0) {
        echo "Skipping number $counterTwo, it is even.\n";
        continue;
    }

    echo "Executing: counter is $counterTwo.\n";
}
?>