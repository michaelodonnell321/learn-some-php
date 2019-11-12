<?php
//exceptions, trys and catches are similar to js

try {
    echo 4/0;
} catch (Exception $e) {
    echo "Exception! Don't divide by 0 and destroy the universe.";
} finally {
    echo "All done";
}

?>