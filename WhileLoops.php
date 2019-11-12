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

$counterThree = 0;

while ($counterThree < 15) {
    $counterThree += 1;

    if ($counterThree > 6) {
        echo "counter is larger than 6, stop immediately";
        break;
    }

    if ($counterThree % 2 == 0) {
        echo "Skip number $counterThree, it is even.\n";
        continue;
    }

    echo "Executing: counter is $counter.\n";
}
?>