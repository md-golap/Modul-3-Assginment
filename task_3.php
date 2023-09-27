

<?php
// Create the array
$grades = array(85, 92, 78, 88, 95);

// Function to sort grades in descending order
function sortGradesDescending($grades) {
    rsort($grades); // Sort in descending order
    return $grades;
}

// Call the function and print the sorted grades
$sortedGrades = sortGradesDescending($grades);
print_r($sortedGrades);
?>