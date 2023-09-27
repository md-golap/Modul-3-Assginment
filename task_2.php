<?php
// Create the $numbers array with numbers 1 to 10
$numbers = range(1, 10);

// Function to remove even numbers from the array
function removeEvenNumbers(&$arr) {
    $arr = array_filter($arr, function($num) {
        return $num % 2 != 0;
    });
}

// Call the function to remove even numbers from $numbers
removeEvenNumbers($numbers);

// Print the resulting array
print_r($numbers);
?>