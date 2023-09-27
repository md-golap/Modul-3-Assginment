<?php
// Create a multidimensional array to store student grades
$studentGrades = array(
    array("Math" => 90, "English" => 85, "Science" => 92),
    array("Math" => 78, "English" => 89, "Science" => 76),
    array("Math" => 92, "English" => 88, "Science" => 95)
);

// Function to calculate and print the average grade for each student
function calculateAverageGrades($grades) {
    foreach ($grades as $student => $subjectGrades) {
        $total = 0;
        $count = 0;
        
        foreach ($subjectGrades as $subject => $grade) {
            $total += $grade;
            $count++;
        }
        
        $average = $total / $count;
        
        echo "Student " . ($student + 1) . " Average Grade: " . number_format($average, 2) . "\n";
    }
}

// Calculate and print average grades
calculateAverageGrades($studentGrades);
?>